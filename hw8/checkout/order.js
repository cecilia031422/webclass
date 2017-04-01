'use strict';
//orderInf				classname for each lineitem div
//displayOrder 			constructor to append all the child divs to the orderInf targetDiv
						//invoke the functions to delete a lineitem and change qty to update total
//getCustomerInf        function to display the shipping information
//when the page loaded, use getJSON to get the object, and fir each orderInf classname, run displayOrder

var orderObj = {};
// var orderObj = {
// "customerInfo" : {"name" : "Cecilia Zhang",
// 						"email" : "hello@gmail.com",
// 						"phone": 1234567,
// 						"address": "1234 Hello St."
// 				},
// "lineItems" : [
// 		{"qty": 1, 
// 		"product": {"desc":"Black coffee", "price": 3.00}
// 		},
// 		{"qty": 3, 
// 		"product": {"desc":"Green tea", "price": 3.50}
// 		},
// 		{"qty": 5, 
// 		"product": {"desc":"Apple juice", "price": 4.00}
// 		}
// 	]
// };

$.getJSON("http://www.ceciliazhang.us/getOrder.json",function(jsonData){
	console.log(jsonData);
	orderObj = jsonData;
	console.log(orderObj);

	$(".orderInf").each( function(index, element) {
		new displayOrder(index, 
			$(element)
			);
	})
	getCustomerInfo();

})

function displayOrder(index,targetDiv){
	$(targetDiv).attr("id","item"+index);

	var descDiv = $("<div />", 
		{"text": orderObj.lineItems[index].product["desc"],
		"class": "col-md-4 col-xs-4"
		}).appendTo(targetDiv);
	var priceDiv = $("<div />", 
		{"text": "$"+orderObj.lineItems[index].product["price"]+"/unit",
		"class": "col-md-3 col-xs-3"
		}).appendTo(targetDiv);
	
	var qtyDiv = $("<select />",
		{"class": "col-md-3 col-xs-3",
		"id":"q"+index,
		"change": function(){
			orderObj.lineItems[index].qty = parseInt(this.value);
			console.log(this.value);
			fTotal();
			}
		}).appendTo(targetDiv);

	var optionsArray = [1,2,3,4,5,6,7,8,9,10];
	for (var i = 0;i < optionsArray.length; i++) {
		$('<option />').val(optionsArray[i]).text(optionsArray[i]).appendTo(qtyDiv)
	}

	var delDiv = $("<input />",
		{"type": "button",
		"class": "btn btn-warning btn-sm pull-right",
		"css": {"margin":"5%"},
		"value": "Delete",
		"id": index,
		"click": function (){
					$("#item"+ index).fadeOut(1000);
					orderObj.lineItems[index].qty = 0;
					fTotal();
				}
		}).appendTo(targetDiv);

	fTotal();
}

function fTotal(){
	var total = 0;
	var arrQty = [];
	$(".orderInf").each( function(index) {
		total += 1.1 * parseFloat(orderObj.lineItems[index].product["price"]) * parseFloat(orderObj.lineItems[index].qty);
		console.log(total);

		arrQty.push(orderObj.lineItems[index].qty);
		console.log(arrQty);
	});


	if (arrQty.every(x=>x == 0)) {
		$("#orderTotal").html("No items in the order.<br><br>$" + total + "<br><sub>including 10% tax and $5 shipping fee</sub>")
	}
	else {
		total = (total+5).toFixed(2);
		$("#orderTotal").html("Total price:<br><br>$" + total + "<br><sub>including 10% tax and $5 shipping fee</sub>")
	}
}

function getCustomerInfo(){
	$("#customerInfo").html ( "Customer name: " + orderObj.customerInfo.name + "<br>"
								+ "Email address: " + orderObj.customerInfo.email + "<br>" 
								+ "Phone number: " + orderObj.customerInfo.phone + "<br>" 
								+ "Address: " + orderObj.customerInfo.address);
}





