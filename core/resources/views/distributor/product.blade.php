@extends('distributor.design.theme')
@section('content')
    <form class="form-horizontal form-label-left" action="{{url('/saveProduct')}}"
          method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" id="_token" value="<?php echo csrf_token(); ?>">
        {{csrf_field()}}
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <center><strong> ::: Create Product :::
                        </strong></center>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="x_panel">
                <div class="x_content">

                    <div class="form-group">

                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="name">Item Code<span
                                    class="required">*</span>
                        </label>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <input type="text" class="form-control" name="item_code" id="item_code"
                                   placeholder="Please Enter Item Code"/>
                        </div>

                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="name">Item Name<span
                                    class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <input type="text" class="form-control" name="item_name" id="item_name"
                                   placeholder="Please Enter Item Name"/>
                        </div>


                    </div>

                    <div class="form-group">

                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="name">Item Factor<span
                                    class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <input type="text" class="form-control" name="item_factor" id="item_factor"
                                   placeholder="Please Enter Item factor"/>
                        </div>

                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="name">Item Rate<span
                                    class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <input type="text" class="form-control" name="item_rate" id="item_rate"
                                   placeholder="Please Enter Item Rate"/>
                        </div>


                    </div>

                    <div class="form-group">

                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="name">Status<span
                                        class="required">*</span>
                            </label>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <select class="form-control" name="status" id="status">
                                    <option value="">Status</option>
                                    <option value="Y">Active</option>
                                    <option value="N">In active</option>

                                </select>
                            </div>

                        </div>


                    </div>


                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <button id="send" type="submit"
                                class="btn btn-success  col-md-offset-2 col-sm-offset-2"
                                onclick="getReport()">Submit
                        </button>
                    </div>


                </div>
            </div>
        </div>

    </form>
    <script type="text/javascript">


        $(document).ready(function () {

            $("select").select2({width: 'resolve'});

        });
        

    </script>
@endsection