window.onload = function() {
	getMyOrder();
};

function get( url ) {
	return new Promise(function (resolve,reject){
		var req = new XMLHttpRequest();
		req.open( "GET", url , true );
		req.send();

		req.onload = function() {
			resolve( req.response );
		}
		req.onerror = function () {
			reject( Error("What went wrong") );
		}	
	});
};

function getMyOrder(){
	get ("http://localhost/getOrder.json").then (
		function(response){
			orderObj = JSON.parse(response);
			fDisplayOrder();
			getCustomerInfo();
		},

		function(error){
			console.log("Failed" + error.message);
		}
	);
};

var displayOrder = [
	new OrderInfo (0),
	new OrderInfo (1),
	new OrderInfo (2)
];


function OrderInfo (itemID) {
	this.id = itemID;
	this.getHTML = function(){
		$("#item"+this.id).html(
			"<td id=desc" + this.id + ">"
				+ orderObj.lineItems[this.id].product["desc"] 
			+ "</td>"

			+ "<td id=price" + this.id + ">"
				+ orderObj.lineItems[this.id].product["price"] 
			+ "</td>" 

			+ "<td>"
				+"<form >"
				+"<div class=\"form-group\">"
  					+"<select class=\"form-control mb-2 mr-sm-2 mb-sm-0\" id=q"+ this.id + " onchange=\"displayOrder["+itemID+"].changeQuantity(this.value)\">"
    					+"<option value=\"1\">1</option><option value=\"2\">2</option><option value=\"3\">3</option><option value=\"4\">4</option><option value=\"5\">5</option><option value=\"6\">6</option><option value=\"7\">7</option><option value=\"8\">8</option><option value=\"9\">9</option><option value=\"10\">10</option>"
  					+"</select>"
				+"</div>"
				+"</form>"
			+ "</td>"

			+ "<td><input type=\"button\" class=\"btn btn-warning\" value=\"Delete\" onclick= \"displayOrder[this.id].deleteItem()\" id = "+ this.id + ">" 
			+ "</td>"
		)
	};

	this.deleteItem = function(){
		document.getElementById("item" + this.id).style.color = "#E3E0E0";
		document.getElementById("q"+this.id).disabled = true;
    	orderObj.lineItems[this.id].qty = 0;
    	fTotal();
    };

    this.changeQuantity = function(value){
    	var replacedId = (this.id).toString().replace("q","");
    	console.log(replacedId);
    	orderObj.lineItems[replacedId].qty = value;
    	fTotal();
    };

	this.addQuantityToTotal = function(total){
		total = 1.1 * (parseFloat(orderObj.lineItems[this.id].product["price"])) * (parseFloat(orderObj.lineItems[this.id].qty));
		return total;
	};
};

function fDisplayOrder(){
	for (var i = 0; i < displayOrder.length; i++) {
		var currentLine = displayOrder[i];
		currentLine.getHTML();
	}
	fTotal();
};

function fTotal(){
	var total = 0;
	var arrQty = [];
	for (var i = 0; i < displayOrder.length; i++) {
		var currentLine = displayOrder[i];
		total = total + currentLine.addQuantityToTotal(total);
		arrQty.push(orderObj.lineItems[i].qty);
		//console.log(arrQty);
	};

	if (arrQty.every(x => x == 0)) {
		$("#orderTotal").html("No items in the order.<br> Total: $" + 0);
	} 
	else {
		total = (total + 5).toFixed(2);
		$("$orderTotal").html = "Total price:<br> $" + total + "<br><sub>including 10% tax and $5 shipping fee</sub>"
	};
};

function getCustomerInfo(){
	$("#customerInfo").html 
		( "Customer name: " + orderObj.customerInfo.name + "<br>"
			+ "Email address: " + orderObj.customerInfo.email + "<br>" 
			+ "Phone number: " + orderObj.customerInfo.phone + "<br>" 
			+ "Address: " + orderObj.customerInfo.address);	
}