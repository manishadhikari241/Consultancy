<div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-header">
            <h5 class="modal-title" id="abc">Apply</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="post" action="{{route('apply')}}">
            @csrf
            <input type="hidden" name="id" value="{{$id}}">
            <div class="modal-body">
                <div class="form-group">
                    <label for="email">Name</label>
                    <input type="text"  class="form-control" placeholder="Enter Your name"
                           name="name" value="" required="required">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Enter Your Email"
                           name="email" value="" required="required">
                </div>
                <div class="form-group">
                    <label for="subject">Contact</label>
                    <input type="text" id="subject" class="form-control" name="contact"
                           placeholder="Enter your contact">
                </div>
                <label for="message">Address</label>
                <input type="text" id="subject" class="form-control" name="address"
                       placeholder="Enter your address">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Apply</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div>