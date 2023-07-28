export class FinalOrder{
  productList;
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
    this.productList.foreach(product=>{total += product.price});
    total += this.deliveryCost;
    this.total = total;

    return this.total;
  }

}