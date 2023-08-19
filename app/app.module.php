<?php 
  require_once('.router/router.php');
  require_once('.router/router.functions.php');
  require_once('.data/data-services/store.service.php');
  require_once('.data/dbFunctions.php');
  
  use router\Router;


  $globalStyles = [
    'style.css',
    '.error-pages/error-pages.css',
    'app/nav/nav.css',
    'app/app.css',
    'app/loader/loader.css'
  ];

  $globalViews = [

    ['/',
      'app/home/home.php',[
        'app/home/home.css',
        'app/home/about-us/about-us.css',
        'app/home/nav-home/nav-home.css',
        'app/home/acquire/acquire.css',
        'app/home/start/start.css',
        'app/home/why-we/why-we.css',
      ]
    ],
    ['/burguerking',
      'app/board/board.view.php',[
        'app/board/board.css',
        'app/banner/banner.css',
        'app/cart/cart.css'
    ]
    ],
    ['/producto',
        'app/details/details.view.php',[
          'app/details/details.css',
          'app/forms/forms.css'
      ]
    ],
    ['/finalizar',
      'app/finish/finish.view.php',[
        'app/finish/finish.css',
        'app/forms/forms.css',
      ]
    ]
  ];

  $globalIncludes = [
    'app/.methods/db-sim.php',
    'app/classes/variant.php',
    '.tools/stools.module.php'
  ];

  $globalRequires = [
  ];
  

  $initUri = '/'; // -> '/login'
 


  function routerView($routeList){
    setStoreData();

    global $globalViews;
    foreach($globalViews as &$view){
      Router::post($view,function($component){
        include $component;
      });
      Router::get($view,function($component){
        include $component;
      });
    };
    
    Router::dispatch(count($routeList));  
  };

  function includeAndRequire($includes,$requires){
    foreach($includes as $file){
      include $file;
    };

    foreach($requires as $file){
      include $file;
    };
  }

  function injectedModule($resource){
    global $globalStyles;
    global $globalViews;

    $styles = $globalViews;
    $routeList = route_uriArray(); #router.functions.php
    $lastUri = end($routeList);

    //s_alert($lastUri);

    switch($resource){          
      case 'styles':
        foreach($globalStyles as &$style){
          echo '<link href="'.$style.'" rel="stylesheet" type="text/css">';
        };
        
        foreach($globalViews as &$view){
          if($view[0] == '/'.$lastUri){
            $viewStyles = $view[2];
            foreach($viewStyles as &$style){
              echo '<link href="'.$style.'" rel="stylesheet" type="text/css">';
            };
          }
        }
        break;

      case 'aplication':
        routerView($routeList);
        break;
    };
  };

  function setStoreData(){
    global $initUri;
    $storeNameInUri = route_uriNameForLevel(1);

    if(( $_SESSION['storeRoute'] !== $storeNameInUri || !isset($_SESSION['storeRoute']) ) && $storeNameInUri !== '/' && $storeNameInUri !== '/home'){
      $storeList = getStoreByRoute($storeNameInUri);

      if(count($storeList) == 1){
        include_once 'app/.data/data-services/category.service.php'; 
        include_once 'app/.data/data-services/variants.service.php';

        $store = $storeList[0];
        $storeId = $store->getId();
        $categories = getCategoriesByStoreId($storeId);
  
        $_SESSION['storeName'] = $store->getStoreName();
        $_SESSION['storeId'] = $storeId;
        $_SESSION['storeRoute'] = $store->getRoute();
        $_SESSION['storeLogo'] = $store->getLogo();
        $_SESSION['storeBanner'] = $store->getBanner();
        
        $categoriesList = [];

        foreach($categories as $category){
          $categoriesList[] = $category->toList();
        }

        $_SESSION['categories'] = $categoriesList;
        
      }else if(route_uriForLevel(1) !== '/'){
        echo '<script>location.href="'.$initUri.'"</script>';
      }
    }
  }
  
  function initialize(){
    //global $unrestrictedUrls;
    global $globalIncludes;
    global $globalRequires;

    includeAndRequire($globalIncludes,$globalRequires);
    //unrestricted($unrestrictedUrls);
  
  };


  initialize();
?>