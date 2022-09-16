<div>
  <div class="container" style="padding: 30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                        Add New Slide
                        </div>
                        <div class="col-md-6">
                        <a href="{{route('admin.homeslider')}}" class="btn btn-success pull-right">All Slides </a>
                        </div>
                    </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert"> {{Session::get('message')}}</div>
                        @endif
                    <form action="" class="form-horizontal" wire:submit.prevent="addSlide">
                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Title</label>
                            <div class="col-md-4">
                                <input type="text" name="" placeholder="Title" class="form-control input-md" id="" wire:model='title'/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Subtitle</label>
                            <div class="col-md-4">
                                <input type="text" name="" placeholder="Subtitle" class="form-control input-md" id=""  wire:model='subtitle'/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Price</label>
                            <div class="col-md-4">
                                <input type="text" name="" placeholder="Price" class="form-control input-md" id=""  wire:model='price'/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Link</label>
                            <div class="col-md-4">
                                <input type="text" name="" placeholder="Link" class="form-control input-md" id=""  wire:model='link'/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Image</label>
                            <div class="col-md-4">
                                <input type="file" name="" placeholder="Title" class="input-file" id=""  wire:model='image'/>
                                @if($image)
                            <img src="{{$image->temporaryUrl()}}" width="120px" alt=""/>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Status</label>
                            <div class="col-md-4">
                            <select name="" id="" class="form-control"  wire:model='status'>
                                <option value="0">Inactive</option>
                                <option value="1">Active</option>
                            </select>
                         </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" name="" placeholder="Link" class="btn btn-primary" id="">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>

            </div>
        </div>
    </div>
</div>
</div>
