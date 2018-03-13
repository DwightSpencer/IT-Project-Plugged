
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Products
                        <div class="row" style="text-alignL: justify;padding-top: 10px;">
                            <?php
                            foreach ($Products as $value){
                            ?>
                                <div class="col-sm-4" style="padding-top: 5px; border: 1px solid #222; margin: 5px;">
                                    <p>
                                    <img height="250px" src="storage/app/upload/product_image/<?php echo $value->image; ?>">
                                        <?php
                                        
                                        echo $value->name;
                                        echo '<br>';
                                        echo "Price:" .$value->price;
                                        ?>
                                        
                                    </p>
                                    
                                    
                                </div>
                            
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
                            
@endsection