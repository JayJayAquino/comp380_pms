<template>
<div class="col-md-10 body-container">
    <div class="row">
        <div class="col-md-12">
            <h4>Decisions</h4>
        </div>
        <div class="col-md-12">
            <table>
                <tr>
                    <th><input type="checkbox" id="myCheck"></th>
                    <th>Title</th>
                    <th>Date Raised</th>
                    <th>Date Assigned</th>
                    <th>Severity</th>
                    <th>Priority</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td><input type="checkbox" id="myCheck"></td>
                    <td>Decision</td>
                    <td>02-18-2019</td>
                    <td>02-18-2019</td>
                    <td>Med</td>
                    <td>Low</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="myCheck"></td>
                    <td>Decision</td>
                    <td>02-18-2019</td>
                    <td>02-18-2019</td>
                    <td>Med</td>
                    <td>Low</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="myCheck"></td>
                    <td>Decision</td>
                    <td>02-18-2019</td>
                    <td>02-18-2019</td>
                    <td>Med</td>
                    <td>Low</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
            </table>
        </div>
        <div class="col-md-12">
            <button type="button" class="btn btn-danger table-button">Delete</button>
            <button type="button" class="btn button-add table-button">Add</button>
        </div>

                <div class="col-md-12 active-margin">
                <div class="modal-content">
                    <div class="modal-header modal-dec">
                        <h5 class="modal-title">Active (ID: AB-227)</h5>
                        <div class="pull-right">CLOSED</div>
                    </div>
                    <div class="modal-header modal-sub-dec">
                            <div>Date Raised: 02/28/18</div>
                            <div>Date Assigned: 08/28/18</div>
                            <div>Last Updated: 08/28/18</div>
                            <div>Estimated End Date: 12/28/18</div>
                            <div>Actual: 12/31/18</div>
                            <div>Date Needed: 01/01/19</div>
                    </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            Title:<br>
                            <input type="text" name="Title">
                        </div>
                        <div class="col-md-6">
                            Decision Maker:<br>
                            <input type="text" name="Decision Maker">
                        </div>
                        <div class="col-md-6">
                            Date Needed:<br>
                            <input type="text" name="Date Needed">
                        </div>
                        <div class="col-md-6">
                            Estimated Completion:<br>
                            <input type="text" name="Estimated Completion">
                        </div>
                        <div class="col-md-6">
                            Priority:<br>
                            <input type="text" name="Priority">
                        </div>
                        <div class="col-md-6">
                            Severity:<br>
                            <input type="text" name="Severity">
                        </div>
                        <div class="col-md-6">
                            Description:<br>
                            <input type="text" name="Description">
                        </div>
                        <div class="col-md-6">
                            Status:<br>
                            <input type="text" name="Status" value="closed">
                        </div>
                        <div class="col-md-6">
                            Status Description:<br>
                            <input type="text" name="Status Description">
                        </div>
                    </div>
                </form> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn button-add table-button">Confirm</button>
            </div>
        </div>
        </div>

        <div class="col-md-12 active-margin">
            <p>Related Reference Documents</p>
        </div>
        <div class="col-md-12">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                </tr>
                <tr>
                    <td>3612</td>
                    <td>Reference Documents</td>
                </tr>
                <tr>
                    <td>3612</td>
                    <td>Reference Documents</td>
                </tr>
                <tr>
                    <td>3612</td>
                    <td>Reference Documents</td>
                </tr>
            </table>
        </div>
        <div class="col-md-12">
            <button type="button" class="btn button-add table-button" data-toggle="modal" data-target="#myModal">Add</button>
        </div>

        <div class="col-md-12 active-margin">
            <p>Meeting Notes</p>
        </div>
        <div class="col-md-12">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                </tr>
                <tr>
                    <td>3612</td>
                    <td>Meeting Notes</td>
                </tr>
                <tr>
                    <td>3612</td>
                    <td>Meeting Notes</td>
                </tr>
                <tr>
                    <td>3612</td>
                    <td>Meeting Notes</td>
                </tr>
            </table>
        </div>
        <div class="col-md-12">
            <button type="button" class="btn button-add table-button" data-toggle="modal" data-target="#myModal">Add</button>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header modal-dec">
                <h4 class="modal-title">Decision Creation</h4>
                <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            Title:<br>
                            <input type="text" name="Title">
                        </div>
                        <div class="col-md-6">
                            Decision Maker:<br>
                            <input type="text" name="Decision Maker">
                        </div>
                        <div class="col-md-6">
                            Date Needed:<br>
                            <input type="text" name="Date Needed">
                        </div>
                        <div class="col-md-6">
                            Estimated Completion:<br>
                            <input type="text" name="Estimated Completion">
                        </div>
                        <div class="col-md-6">
                            Priority:<br>
                            <input type="text" name="Priority">
                        </div>
                        <div class="col-md-6">
                            Severity:<br>
                            <input type="text" name="Severity">
                        </div>
                        <div class="col-md-6">
                            Description:<br>
                            <input type="text" name="Description">
                        </div>
                        <div class="col-md-6">
                            Status:<br>
                            <input type="text" name="Status">
                        </div>
                        <div class="col-md-6">
                            Status Description:<br>
                            <input type="text" name="Status Description">
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
