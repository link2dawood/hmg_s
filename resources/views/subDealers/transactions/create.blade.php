<div class="modal-content">
    <div class="modal-header text-white" style="background: #0984e3">
        <h5 class="modal-title" id="exampleModalLabel">
        {{@$page_title}}
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" class="text-white">
            ×
        </span>
        </button>
    </div>
    <form action="{{$action}}" method="post" data-action="make_ajax" data-action-after="reload" >
        @csrf
        <div class="modal-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="label" class="control-label">Sr Number</label>
                        <input type='text' name="" id="label" class="form-control" required="" value="{{@$subdealer->prefix}}"  disabled/>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="label" class="control-label">Sub Dealer Name</label>
                        <input type='text' name="" id="label" class="form-control" required="" value="{{@$subdealer->name}}"  disabled/>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="label" class="control-label">Date</label>
                        <input type='date' name="date" id="label" class="form-control" required="" />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="label" class="control-label">Bill Amount</label>
                        <input type='text' name="bill_amount" id="label" class="form-control" required=""/>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="label" class="control-label">Received Amount</label>
                        <input type='text' name="received_amount" id="label" class="form-control" required="" />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="label" class="control-label">Receipt Number</label>
                        <input type='text' name="receipt_number" id="label" class="form-control" required="" />
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description" class="control-label">Description</label>
                        <textarea  name="description" id="description" class="form-control"></textarea>
                    </div>
                </div> 
                <hr>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="label" class="control-label">Items</label>
                        <select class="form-control" name="item">
                            @foreach ($items as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="label" class="control-label">code</label>
                        <input type='text' name="code" id="label" class="form-control" required=""/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <input type='hidden' name="subdealer_id" id="label" class="form-control" required="" value="{{@$subdealer->id}}"/>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn" style="background: #0984e3">Add</button>
            <button type="reset" class="btn btn-danger">Clear</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </form>
</div>