



<html>
    <head>   
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        
    
    <form  onsubmit="return validate()" action="../../controller/Product/uploadProduct.php" method="post" enctype="multipart/form-data">
            <b>Product name :</b> 
            <input id="Pname" type="text" value="" name="Pname"><br><br><br>
            <b>Product Quantity :</b>
            <input type="text" id="Pquantity" value="" name="Pquantity"><br><br><br>
            <b>Product category :</b>
            <input type="text" id="category" value="" name="category"><br><br><br>
            <b>Price :</b>
            <input type="text" id="price" value="" name="price"><br><br><br>
            <b>Product image :</b>
            <input type="file" id="image"  name="image"><br><br>
            <button type="submit">ASSIGN</button>
        </form>

        
        
        <script>
            function validate()
            {
                var count=0;
                var pname=document.getElementById("Pname");
                var Pquantity=document.getElementById("Pquantity");
                var category=document.getElementById("category");
                var price=document.getElementById("price");
                var image=document.getElementById("image");

                if (pname=="") 
                {
                    alert("Product name must me filled up");
                    count=0;
                }else
                {
                    count++;
                }

                
                
                if (Pquantity=="") 
                {
                    alert("Product Quantity must me filled up");
                    count=0;
                }else
                {
                    count++;
                }

                if(category=="")
                {
                    alert("Product Category must me filled up");
                    count=0;
                }else
                {
                    count++;
                }

                
                
                if (price=="") 
                {
                    alert("price must me filled up");
                    count=0;
                }else
                {
                    count++;
                }
                
                if (image=="") 
                {
                    alert("image must me filled up");
                    count=0;
                }else
                {
                    count++;
                }

                if(count==5)
                {
                    return true;
                }else if(count < 5)
                {
                    return false;
                }

            
            }


        </script>