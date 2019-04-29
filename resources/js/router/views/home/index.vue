<template>
<div class="pageSize home">
    <div class="col-md-12">
        <sub-header></sub-header>
        <!-- table -->
        <div class="row">
            <div class="col-md-12">
                <div class="home__buttons">
                    <button type="button" class="btn btn-primary">16 Deliverables</button>
                    <button type="button" class="btn btn-success">124 Tasks</button>
                    <button type="button" class="btn btn-danger">26 Issues</button>
                    <button type="button" class="btn btn-warning">37 Actions Items</button>
                </div>
            </div>
        </div>
        <div class="table-component">
            <table class="table">
                <thead>
                    <tr class="table__header">
                        <th>Gantt Chart <p class="table__header--left">5 Resources</p></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><p class="table__header-date table__header-date--first">Aug 1</p><p class="table__header-date">Aug 8</p><p class="table__header-date">Aug 15</p><p class="table__header-date">Aug 22</p><p class="table__header-date">Aug 29</p><p class="table__header-date">Sep 5</p><p class="table__header-date">Sep 12</p><p class="table__header-date">Sep 19</p></td>

                    </tr>
                    <tr>
                        <td>Task 1</td>
                        <td class="gantt-peter"> <p class="gantt--text">Peter Parker</p></td>
                    </tr>
                    <tr>
                        <td>Task 2</td>
                        <td class="gantt-steve"> <p class="gantt--text">Steve Rodgers</p></td>
                    </tr>
                    <tr>
                        <td>Task 3</td>
                        <td class=" gantt-thor"> <p class="gantt--text">Thor Odinson</p></td>
                    </tr>
                    <tr>
                        <td>Task 4</td>
                        <td class=" gantt-hank"> <p class="gantt--text">Hank Pym</p></td>
                    </tr>
                    <tr>
                        <td>Task 5</td>
                        <td class="gantt-banner"> <p class="gantt--text">Bruce Banner</p></td>
                    </tr>
                    <tr>
                        <td>Task 6</td>
                        <td class="gantt-widow"> <p class="gantt--text">Black Widow</p></td>
                    </tr>
                    <tr>
                        <td>Task 7</td>
                        <td class="gantt-stark"> <p class="gantt--text">Tony Stark</p></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</template>

<script>
import subHeader from '../../../components/global/subHeader.vue';

export default {
    components: {
        subHeader,
    }
}
</script>
