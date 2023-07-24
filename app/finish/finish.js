function switchDelivery(option){
  const deliverySwitchElement = document.getElementById('finish-delivery-switch');
  const takeAwaySwitchElement = document.getElementById('finish-takeAway-switch');
  const directionInput = document.getElementById('finish-direction-input');
  const obsInput = document.getElementById('finish-obs-input');

  if(option == 'takeAway'){
    deliverySwitchElement.style.backgroundColor = 'rgb(255, 255, 255)';
    takeAwaySwitchElement.style.backgroundColor = 'rgb(240, 150, 40)';

    deliverySwitchElement.style.color = 'black';
    takeAwaySwitchElement.style.color = 'rgb(255, 255, 255)';

    directionInput.disabled = true;
    obsInput.disabled = true;

    
    directionInput.style.backgroundColor = 'rgba(128, 128, 128, 0.28)';
    obsInput.style.backgroundColor = 'rgba(128, 128, 128, 0.28)';

  }else if(option == 'delivery'){
    deliverySwitchElement.style.backgroundColor = 'rgb(240, 150, 40)';
    takeAwaySwitchElement.style.backgroundColor = 'rgb(255, 255, 255)';

    takeAwaySwitchElement.style.color = 'black';
    deliverySwitchElement.style.color = 'rgb(255, 255, 255)';

    directionInput.disabled = false;
    obsInput.disabled = false;

    directionInput.style.backgroundColor = 'rgb(255, 255, 255)';
    obsInput.style.backgroundColor = 'rgb(255, 255, 255)';
  }
}

function switchMethod(option){
  const cashSwitchElement = document.getElementById('finish-cash-switch');
  const otherSwitchElement = document.getElementById('finish-other-switch');
  const methodInput = document.getElementById('finish-method-input');
  const checks = document.getElementById('finish-checks-container');

  if(option == 'other'){
    cashSwitchElement.style.backgroundColor = 'rgb(255, 255, 255)';
    otherSwitchElement.style.backgroundColor = 'rgb(240, 150, 40)';

    cashSwitchElement.style.color = 'black';
    otherSwitchElement.style.color = 'rgb(255, 255, 255)';

    methodInput.style.display = 'none';
    checks.style.display = 'block';

  }else if(option == 'cash'){
    cashSwitchElement.style.backgroundColor = 'rgb(240, 150, 40)';
    otherSwitchElement.style.backgroundColor = 'rgb(255, 255, 255)';

    otherSwitchElement.style.color = 'black';
    cashSwitchElement.style.color = 'rgb(255, 255, 255)';

    methodInput.style.display = 'block';
    checks.style.display = 'none';
  }
}