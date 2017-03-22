//product list that list out the preduct
    var productList = ["product1", "product2", "product3", "product4"];
    //function that change product picture on click
    function change(clicked_id) {
      //changing the image with src
        document.getElementById("contentPic").src = "img/" + productList[clicked_id] + ".jpg";
        //change the product name
        document.getElementById("contentTitle").innerHTML = "This is " + productList[clicked_id]+".";
        //$("#" + clicked_id).addclass('clickedClass');
    };
