<template>
<div class="col-md-10 body-container">
    <div class="row">
        <div class="col-md-12">
            <h4>Home | Sprint 7</h4>
        </div>
        <div class="col-md-12">
        <div class="table-component">
            <table class="table">
                <thead>
                    <tr class="table__header">
                        <th>Gantt Chart <p class="table__header--left"></p></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Task 1</td>
                        <td class="gantt-row1"> <p class="gantt--text">Alberto A.</p></td>
                    </tr>
                    <tr>
                        <td>Task 2</td>
                        <td class="gantt-row2"> <p class="gantt--text">Fernie F.</p></td>
                    </tr>
                    <tr>
                        <td>Task 3</td>
                        <td class=" gantt-row3"> <p class="gantt--text">Barb B.</p></td>
                    </tr>
                    <tr>
                        <td>Task 4</td>
                        <td class=" gantt-row4"> <p class="gantt--text">Georgie G.</p></td>
                    </tr>
                    <tr>
                        <td>Task 5</td>
                        <td class="gantt-row5"> <p class="gantt--text">Joan J.</p></td>
                    </tr>
                    <tr>
                        <td>Task 6</td>
                        <td class="gantt-row6"> <p class="gantt--text">Danielle D.</p></td>
                    </tr>
                    <tr>
                        <td>Task 7</td>
                        <td class="gantt-row7"> <p class="gantt--text">Max M.</p></td>
                    </tr>
                    <tr>
                        <td><p class="table__header-date table__header-date--first">Aug 1</p><p class="table__header-date">Aug 8</p><p class="table__header-date">Aug 15</p><p class="table__header-date">Aug 22</p><p class="table__header-date">Aug 29</p><p class="table__header-date">Sep 5</p><p class="table__header-date">Sep 12</p><p class="table__header-date">Sep 19</p></td>

                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
                <div class="col-md-12">
                <table>
                <tr>
                    <th>Deliverables</th>
                    <th>Tasks</th>
                    <th>Issues</th>
                    <th>Action Items</th>
                </tr>
                <tr>
                    <td>20</td>
                    <td>20</td>
                    <td>4</td>
                    <td>8</td>
                </tr>
            </table>
                </div>
        </div>
        <div class="col-md-12">
            <button type="button" class="btn button-add table-button" data-toggle="modal" data-target="#myModal">Add</button>
        </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header modal-dec">
                <h4 class="modal-title">Edit Sprint</h4>
                <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12" style="margin-bottom:10px;">
                            <select name="Categories">
                                <option value="option1">Deliverable</option>
                                <option value="option1">Task</option>
                                <option value="option1">Issue</option>
                                <option value="option1">Action Item</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            Title:<br>
                            <input type="text" name="Title">
                        </div>
                        <div class="col-md-6">
                            Description:<br>
                            <input type="text" name="Description">
                        </div>
                        <div class="col-md-6">
                            Requirements:<br>
                            <input type="text" name="Requirements">
                        </div>
                        <div class="col-md-6">
                            Due Date:<br>
                            <input type="text" name="Due Date">
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