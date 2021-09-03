<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SimpleCalculator_Caringal</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="/css/app.css" rel="stylesheet">

    </head>
    <body style="background-color: #F08080;">
   
    <div class="container">
          <div class="row">
          <div class="col-md-5 m-auto">
          <form action="" method="GET">
             <div class="card" style="background-color:	#90EE90;">   
            <div class="card-body m-auto">            
                <h4 class="text-center text-light">Midterm Exam</h4>


                <!-- INPUT NUMBERS -->

                <div class="numbers"> 
                
                <div class="row inputs">
                    <div class="col-md-12 m-1 text-center">
                        <input class="w-100" type="number" name="valueone" class="txt form-control" placeholder="Enter Number" required="">
                    </div>
                    <div class="col-md-12 m-1">
                        <input class="w-100" type="number" name="valuetwo" class="txt form-control" placeholder="Enter Number" required="">
                    </div>
                    <div class="col-md-12 m-1">
                        <input class="w-100"type="number" name="valuethree" class="txt form-control" placeholder="Enter Number" required="">
                    </div>
                    <div class="col-md-12 mt-4">
                        <input type="submit" name="btn" class="btn btn-lg font-weight-bold" value="Enter">
                    </div>
                </div>                    

                <div class="results inputs p-5">
                    <div class="row">
                        <div class="col-sm-4">Rectangle</div>
                        <div class="col-sm-4">Cuboid</div>
                        <div class="col-sm-3">Square</div>
                    </div>
                    <div class="row">
                        @foreach($results as $result)
                        <div class="col-sm-4">{{$result}}</div>
                        @endforeach
                    </div>
                </div>
                    

                    </div>
                    </form>
                </div>
            </div>
        </div>
       
    </body>
</html>

