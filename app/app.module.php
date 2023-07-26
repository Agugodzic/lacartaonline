<?php 
  require_once('.router/router.php');
  require_once('.router/router.functions.php');

  use router\Router;

  $globalStyles = [
    'style.css',
    '.error-pages/error-pages.css',
    'app/nav/nav.css',
    'app/app.css',
    'app/loadder/loadder.css'
  ];

  $globalViews = [
    ['/',
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

  
  $globalMethods = [
    'app/.methods/db-sim.php',
    'app/classes/variant.php',
    '.tools/stools.module.php'
  ];
  
  $unrestrictedUrls = ['/board','/','/producto','/finalizar'];

  $initUri = '/'; // -> '/login'


  function routerView(){
    global $globalViews;
    foreach($globalViews as &$view){
        Router::post($view,function($component){
          include $component;
        });
        Router::get($view,function($component){
          include $component;
        });
      }
      Router::dispatch(1);
  };

  function includeMethods($methods){
    foreach($methods as $methodsFile){
      include $methodsFile;
    }
  }

  function injectedModule($resource){
    global $globalStyles;
    global $globalViews;
    $styles = $globalViews;
    $cleanUri = route_uriForLevel(1); #router.functions.php
    switch($resource){          
      case 'styles':
        foreach($globalStyles as &$style){
          echo '<link href="'.$style.'" rel="stylesheet" type="text/css">';
        };
        
        foreach($globalViews as &$view){
          if($view[0] == $cleanUri ){
            $viewStyles = $view[2];
            foreach($viewStyles as &$style){
              echo '<link href="'.$style.'" rel="stylesheet" type="text/css">';
            };
          }
        }
        break;

      case 'aplication':
        routerView();
        break;

      case 'background':
        include_once('app/.data/data-services/background.service.php');
        $background =  get_background(); #background.service.php
        if(isset($_GET["background"]) && route_uriForLevel(1) != '/login' && route_uriForLevel(1) != '/register'){
          $backgroundId = $_GET["background"];

          if($backgroundId != 0){
            echo ' <img id="app-background" src='.$background[$backgroundId][0].'>';
          };

        }else if(isset($_SESSION['user_background']) && route_uriForLevel(1) != '/login' && route_uriForLevel(1) != '/register'){
          $backgroundId = $_SESSION['user_background'];

          if($backgroundId != 0){
            echo ' <img id="app-background" src='.$background[$backgroundId][0].'>';
          };

        }else if( route_uriForLevel(1) == '/login' || route_uriForLevel(1) == '/register'){
          echo ' <img id="app-background" src=".files\image7.jpg">';
        }
        break;
    };
  };

  function unrestricted($unrestrictedUrls){
    global $initUri;

    if(isset($_SESSION['user_id'])){
      $userId = $_SESSION['user_id'];
    }else{
      $uriIsRestricted = !in_array(route_uriForLevel(1), $unrestrictedUrls, $strict = true);
      if($uriIsRestricted){
        echo '<script>location.href="'.$initUri.'"</script>';
      };
    }
  };
  
  function initialize(){
    global $unrestrictedUrls;
    global $globalMethods;

    includeMethods($globalMethods);
    unrestricted($unrestrictedUrls);
  };


  initialize();
?>