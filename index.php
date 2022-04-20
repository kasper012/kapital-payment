<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    	<title>Form</title>
    	<style>
    	    input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
              -webkit-appearance: none;
              margin: 0;
            }
            input , textarea{
                border-radius: 5px;
                font-size: 20px;
            }
            
            ::selection {
              color: teal;
              background: white;
            }
            
            body {
            	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab) !important;
            	background-size: 400% 400%;
            	animation: gradient 15s ease infinite;
            	height: 100vh;
            }
            
            @keyframes gradient {
            	0% {
            		background-position: 0% 50%;
            	}
            	50% {
            		background-position: 100% 50%;
            	}
            	100% {
            		background-position: 0% 50%;
            	}
            }
    
            .form-wrapper:hover {
                transform: scale(1.05);
              transition:all 0.2s linear;
            }yy
    	</style>
    </head>
    <body class="d-flex justify-content-center align-items-center flex-column w-100" style="height: 100vh;background:linear-gradient(140deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 44%, rgba(0,212,255,1) 100%);">
        <div class="container-fluid d-flex justify-content-center mb-3">
            <h1 class="text-white">Very interesting product</h1>
        </div>
    	<div class="form-wrapper px-5" style="border: 1px solid black;border-radius: 20px;background-color: white">
    		<form action="request.php" method="POST" class="d-flex flex-column">
    			<input type="number" class="my-3" class="my-3"step="0.01" placeholder="Price in manats" name="amount" min="0" required >
    			<textarea placeholder="Description" name="desc" required class="mb-3" rows="5"></textarea>
    			<button class="btn btn-success" type="submit">Send</button>
    		</form>
    
    		<br>
    	</div>
    	<script type="text/javascript"> 
            document.write(document.referrer);
        </script> 
    </body>
</html>

