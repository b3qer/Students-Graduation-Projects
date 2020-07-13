<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .work-space {
            width: 100%;
            max-width: 330px;

            margin: 0 auto;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <title>Departments</title>
</head>

<body>
    <div class="work-space pt-3">
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <div class="text-center">



                        <h3>Add new Department</h3>




                    </div>
                    <hr>
                   
                    <div class="w-100">

                       


                            <form action="/admin/departments" method="POST" class="form-row align-items-center">
                                @csrf
                            <div class="col">
                                <label class="sr-only" for="inlineFormInput">Name</label>
                                <input type="text" class="form-control mb-2" id="search" placeholder="Department name"
                                    name="name">
                                <input type="hidden" name="invoice" value="">
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary mb-2" type="submit" href="/user/invoice/details/">Add</button>
                                
                            </div>
                        </form>
                        
                        
                    </div>
                    @if (Session::has('done'))

                    <span class="" role="alert" style="color:red;">
                      <strong>{{ Session::get('done') }}</strong>
                    </span>
                    @endif
                    <hr>
                    
                    <div class="w-100">
                        <ul class="list-group text-right " id="list">
                          
@forelse ($departments as $department)
<li class="list-group-item d-flex justify-content-between align-items-center">
    <div class="text-center">
       

    <span style="font-weight: bold;">{{$department->name}}</span><br>

    </div>
    <div>
    <a href="/admin/delete/department/{{$department->id}}"  class="badge badge-danger delete" >Delete</a>
       
    </div>



</li>
@empty
<li class="list-group-item text-center">No Department </li>  
@endforelse
                           

                           

                        </ul>
                    </div>
                </div>
            </div>
        </div>



    </div>
    

    <div class="modal fade" id="send" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">تأكيد الشراء</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/item/delete" method="post">
                    @csrf
                    <div class="modal-body text-right">
                        <p> المبلغ النهائي مع التوصيل هو : <span id="price">10000</span> دينار عراقي</p>
                        <input type="text" id="item" name="id" class="">
                        <input type="text" id="invoice" name="invoice" class="d-none">
                    </div>
                    <div class="modal-footer text-centers">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">خروج</button>
                        <button type="submit" class="btn btn-success">شراء</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>