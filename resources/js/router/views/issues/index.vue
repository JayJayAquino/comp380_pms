<template>
<div class="col-md-10 body-container">
    <div class="row">
        <div class="col-md-12">
            <h4>Issues</h4>
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
                    <td>Issue</td>
                    <td>02-18-2019</td>
                    <td>02-18-2019</td>
                    <td>Med</td>
                    <td>Low</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="myCheck"></td>
                    <td>Issue</td>
                    <td>02-18-2019</td>
                    <td>02-18-2019</td>
                    <td>Med</td>
                    <td>Low</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="myCheck"></td>
                    <td>Issue</td>
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
            <button type="button" class="btn button-add table-button" data-toggle="modal" data-target="#myModal">Add</button>
        </div>

            <div class="col-md-12 active-margin">
                <div class="modal-content">
                    <div class="modal-header modal-dec">
                        <h5 class="modal-title">Active (ID: AB-227)</h5>
                    </div>
                    <div class="modal-header modal-sub-dec">
                            <div>Estimated Duration: 02/28/18-08/28/18</div>
                            <div>Effort Estimate: 6 months</div>
                            <div>Previous Task: AB-226</div>
                            <div>Next Task: AB-228</div>
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
                        <div class="col-md-6">
                            Resource:<br>
                            <input type="text" name="Resource">
                        </div>
                        <div class="col-md-6">
                            Start Date:<br>
                            <input type="text" name="Start Date">
                        </div>
                        <div class="col-md-6">
                            End Date:<br>
                            <input type="text" name="End Date">
                        </div>
                        <div class="col-md-12 active-margin">Actual Duration: TBD</div>
                    </div>
                </form> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn button-add table-button">Confirm</button>
            </div>
        </div>
        </div>

        <div class="col-md-12 active-margin">
            <p>Related Action Items</p>
        </div>
        <div class="col-md-12">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Date Raised</th>
                    <th>Date Assigned</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>394</td>
                    <td>Action Item</td>
                    <td>02-18-2019</td>
                    <td>02-18-2019</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
                <tr>
                    <td>394</td>
                    <td>Action Item</td>
                    <td>02-18-2019</td>
                    <td>02-18-2019</td>
                    <td>Lorem ipsum dolor sit.</td>
                </tr>
                <tr>
                    <td>394</td>
                    <td>Action Item</td>
                    <td>02-18-2019</td>
                    <td>02-18-2019</td>
                    <td>Lorem ipsum dolor sit.</td>
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
                <h4 class="modal-title">Issue Creation</h4>
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
                            Expected End Date:<br>
                            <input type="text" name="Expected End Date">
                        </div>
                        <div class="col-md-6">
                            Description:<br>
                            <input type="text" name="Description">
                        </div>
                        <div class="col-md-6">
                            Related Task:<br>
                            <input type="text" name="Related Task">
                        </div>
                        <div class="col-md-6">
                            Priority:<br>
                            <input type="text" name="Priority">
                        </div>
                        <div class="col-md-6">
                            Severity:<br>
                            <input type="text" name="Severity">
                        </div>
                        <div class="col-md-12">
                            Assign to:<br>
                            <select name="Assign to: ">
                                <option value="option1">Adelia A.</option>
                                <option value="option1">Alberto A.</option>
                                <option value="option1">Barb B.</option>
                                <option value="option1">Brian B.</option>
                                <option value="option1">Carla C.</option>
                                <option value="option1">Christopher C.</option>
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
