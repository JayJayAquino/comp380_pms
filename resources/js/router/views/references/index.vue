<template>
<div class="col-md-10 body-container">
    <div class="row">
        <div class="col-md-12">
            <p>References</p>
        </div>
        <div class="col-md-12">
            <table>
                <tr>
                    <th><input type="checkbox" id="myCheck"></th>
                    <th>Title</th>
                    <th>Requestor</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td><input type="checkbox" id="myCheck"></td>
                    <td>Reference</td>
                    <td>Nyol N.</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="myCheck"></td>
                    <td>Reference</td>
                    <td>Harry H.</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="myCheck"></td>
                    <td>Reference</td>
                    <td>Fiona F.</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
            </table>
        </div>
        <div class="col-md-12">
            <button type="button" class="btn btn-danger table-button">Delete</button>
            <button type="button" class="btn button-add table-button" data-toggle="modal" data-target="#myModal">Upload</button>
        </div>

        <div class="col-md-12 active-margin">
                <div class="modal-content">
                    <div class="modal-header modal-dec">
                        <h4 class="modal-title">Active (ID: AB-227)</h4>
                    </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            Title:<br>
                            <input type="text" name="Title">
                        </div>
                        <div class="col-md-6">
                            Expected End Date:<br>
                            <input type="text" name="Expected End Date">
                        </div>
                        <div class="col-md-6">
                            Description:<br>
                            <input type="text" name="Description">
                        </div>
                    </div>
                </form> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn button-add table-button">Confirm</button>
            </div>
        </div>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header modal-dec">
                <h4 class="modal-title">Reference Upload</h4>
                <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            Title:<br>
                            <input type="text" name="Title">
                        </div>
                        <div class="col-md-12">
                            Choose file:<br>
                            <select name="Assign to: ">
                                <option value="option1">Reference.pdf</option>
                            </select>
                        </div>
                    </div>
                </form> 
            </div>
            <div>
                <button type="button" class="modal-footer modal-foot-dec" data-dismiss="modal"><div style="margin-right:45%;">Create</div></button>
            </div>
        </div>
        </div>
    </div>
</div>
</template>

<script></script>