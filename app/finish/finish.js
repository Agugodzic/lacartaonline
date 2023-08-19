class FinalOrder{
  productList = [];
  clientName;
  direction;
  observations;
  payWay;
  payWith;
  deliveryCost;
  shippingMethod;
  total;

  constructor(productList, clientName, direction, observations, payWay, payWith, deliveryCost, shippingMethod) {
    this.productList = productList;
    this.clientName = clientName;
    this.direction = direction;
    this.observations = observations;
    this.payWay = payWay;
    this.payWith = payWith;
    this.deliveryCost = deliveryCost;
    this.shippingMethod = shippingMethod;
    this.total= this.totalCalculator();
  }

  totalCalculator(){
    let total = 0;
    this.productList.forEach(product=>{total += product.price});
    total += this.deliveryCost;
    this.total = total;

    return this.total;
  }

}

let sendOption = 'delivery';
let payOption = 'cash';
let checkboxes = document.getElementsByName('method');
checkboxes[0].checked = true;

function switchDelivery(option){
  const deliverySwitchElement = document.getElementById('finish-delivery-switch');
  const takeAwaySwitchElement = document.getElementById('finish-takeAway-switch');
  const directionInput = document.getElementById('finish-direction-input');
  const obsInput = document.getElementById('finish-obs-input'); 
  const payMethodsMessage = document.getElementById('finish-paymethods-message'); 
  const forDelivery = document.querySelectorAll(".not-delivery");

  if(option == 'takeAway'){
    sendOption = "takeAway";

    deliverySwitchElement.style.backgroundColor = 'rgb(255, 255, 255)';
    takeAwaySwitchElement.style.backgroundColor = 'rgb(240, 150, 40)';

    deliverySwitchElement.style.color = 'black';
    takeAwaySwitchElement.style.color = 'rgb(255, 255, 255)';

    payMethodsMessage.style.display='none';

    directionInput.disabled = true;
    obsInput.disabled = true;

    
    directionInput.style.backgroundColor = 'rgba(128, 128, 128, 0.28)';
    obsInput.style.backgroundColor = 'rgba(128, 128, 128, 0.28)';

    forDelivery.forEach(function(elemento) {
      elemento.style.visibility = "visible";
      elemento.style.position = 'relative';
    });



  }else if(option == 'delivery'){
    sendOption ="delivery";

    deliverySwitchElement.style.backgroundColor = 'rgb(240, 150, 40)';
    takeAwaySwitchElement.style.backgroundColor = 'rgb(255, 255, 255)';

    takeAwaySwitchElement.style.color = 'black';
    deliverySwitchElement.style.color = 'rgb(255, 255, 255)';

    directionInput.disabled = false;
    obsInput.disabled = false;

    directionInput.style.backgroundColor = 'rgb(255, 255, 255)';
    obsInput.style.backgroundColor = 'rgb(255, 255, 255)';

    forDelivery.forEach(function(elemento) {
      elemento.style.visibility = "hidden";
      elemento.style.position = 'absolute';
    });
  }
};

function switchMethod(option){
  const cashSwitchElement = document.getElementById('finish-cash-switch');
  const otherSwitchElement = document.getElementById('finish-other-switch');
  const methodInput = document.getElementById('finish-method-input');
  const checks = document.getElementById('finish-checks-container');

  if(option == 'other'){
    payOption = 'other';

    cashSwitchElement.style.backgroundColor = 'rgb(255, 255, 255)';
    otherSwitchElement.style.backgroundColor = 'rgb(240, 150, 40)';

    cashSwitchElement.style.color = 'black';
    otherSwitchElement.style.color = 'rgb(255, 255, 255)';

    methodInput.style.display = 'none';
    checks.style.display = 'block';

  }else if(option == 'cash'){
    payOption = 'cash';

    cashSwitchElement.style.backgroundColor = 'rgb(240, 150, 40)';
    otherSwitchElement.style.backgroundColor = 'rgb(255, 255, 255)';

    otherSwitchElement.style.color = 'black';
    cashSwitchElement.style.color = 'rgb(255, 255, 255)';

    methodInput.style.display = 'block';
    checks.style.display = 'none';
  }
};

function uncheckOthers(checkbox) {
  checkbox.checked = true;

  for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i] !== checkbox) {
          checkboxes[i].checked = false;
      }
  }
};

function messageGenerator(finalOrder) {
  let productList = finalOrder.productList;
  let productText = '';
  let shippingMethodText = '';
  let payWayText = '';
  let observationsText = '';

  productList.forEach((product)=>{
    productText = productText + "☞ " + product.product + " ($"+ product.price +")\n";
  });

  if(finalOrder.payWay === "cash" && finalOrder.payWith > 0){
    payWayText = 'Efectivo.\n▹Pago con: $' + finalOrder.payWith + '\n\n';
  }else if(finalOrder.payWay === "cash"){
    payWayText = 'Efectivo.\n';
  }else{
    payWayText = finalOrder.payWay+'\n';
  };

  if(finalOrder.shippingMethod === "delivery"){
    shippingMethodText = 'Delivery ($'+finalOrder.deliveryCost+')'+ "\n▹Direccion: " + finalOrder.direction +'.';
  }else{
    shippingMethodText = 'Lo busco ';
  };

  if(finalOrder.observations !== undefined && finalOrder.observations !== null){
    if(finalOrder.observations.length > 2){
      observationsText = "\n▹Observaciones: " + finalOrder.observations + '.';
    }
  }

  let message = " Hola!  Quisiera pedir:\n" + productText + "\n▹Nombre: " + finalOrder.clientName + ".\n▹Metodo de envio: " + shippingMethodText + observationsText +"\n▹Metodo de pago: " + payWayText + '\nTotal: $'+ finalOrder.total.toString();
 
  return message;
}

function linkGenerator(phone,message){
  return 'https://api.whatsapp.com/send?phone='+ phone + '&text=' + encodeURIComponent(message);
}

function validate(){
  valid = true;

  if($('input[name="name"]').val().length < 5){
    $('input[name="name"]').addClass('required');
    valid = false;
  }else{
    $('input[name="direction"]').removeClass('required');
  }

  if($('input[name="direction"]').val().length < 8 && sendOption === 'delivery'){
    $('input[name="direction"]').addClass('required');
    valid = false;
  }else{
    $('input[name="direction"]').removeClass('required');
  };

  return valid;
}

function sendOrder(){

  validForm = validate();

  const phone = +5493425419964;
  let productList =  [{product:"hamburguesa triple + cheddar ",price:2500},{product:"hamburguesa triple + bacon",price:3000},{product:"lomito gratinado",price:2700}];
  let payWay;
  let payWith;

  const clientName = $('input[name="name"]').val();
  const direction = $('input[name="direction"]').val();
  const observations = $('input[name="observations"]').val();
  const deliveryCost = 200;
  const shippingMethod = sendOption;
  const total = 2500;

  if(payOption === "cash"){
    payWay = payOption;
    payWith = $('input[name="payWith"]').val();
  }else{
    payWay = $('input[name="method"]:checked').val();
    payWith = null;
  };

  let finalOrder = new FinalOrder(productList,clientName,direction,observations,payWay,payWith,deliveryCost,shippingMethod,total);
  let message = messageGenerator(finalOrder);
  let finalLink = linkGenerator(phone,message);


  console.log(validForm)
  if(validForm){
    window.open(finalLink, '_blank');
  }
}