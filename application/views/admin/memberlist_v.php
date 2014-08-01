<div id="content-wrapper">
    <ul class="breadcrumb breadcrumb-page">
        <div class="breadcrumb-label text-light-gray">You are here: </div>
        <li><a href="http://infinite-woodland-5276.herokuapp.com/index.html#">Home</a></li>
        <li class="active"><a href="http://infinite-woodland-5276.herokuapp.com/index.html#">Dashboard</a></li>
    </ul>
    <div class="page-header">

        <div class="row">
            <!-- Page header, center on small screens -->
            <h1 class="col-xs-12 col-sm-4 text-center text-left-sm"><i class="fa fa-users page-header-icon"></i>&nbsp;&nbsp;회원관리</h1>
        </div>
    </div> <!-- / .page-header -->

    <!-- 12. $NEW_USERS_TABLE ==========================================================================
        
                                New users table
    -->
    <div class="col-md-10 col-md-offset-1">
        <div class="dataTables_wrapper" id="example_wrapper"><div id="example_length" class="dataTables_length"><label>Show <select class="" aria-controls="example" name="example_length"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div class="dataTables_filter" id="example_filter"><label>Search:<input aria-controls="example" placeholder="" class="" type="search"></label></div><table style="width: 100%;" aria-describedby="example_info" role="grid" id="example" class="display dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr role="row"><th aria-label="Name: activate to sort column ascending" aria-sort="ascending" style="width: 133px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" class="sorting_asc">Name</th><th aria-label="Position: activate to sort column ascending" style="width: 224px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" class="sorting">Position</th><th aria-label="Office: activate to sort column ascending" style="width: 100px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" class="sorting">Office</th><th aria-label="Age: activate to sort column ascending" style="width: 41px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" class="sorting">Age</th><th aria-label="Start date: activate to sort column ascending" style="width: 92px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" class="sorting">Start date</th><th aria-label="Salary: activate to sort column ascending" style="width: 77px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" class="sorting">Salary</th></tr>
                </thead>

                <tfoot>
                    <tr><th colspan="1" rowspan="1">Name</th><th colspan="1" rowspan="1">Position</th><th colspan="1" rowspan="1">Office</th><th colspan="1" rowspan="1">Age</th><th colspan="1" rowspan="1">Start date</th><th colspan="1" rowspan="1">Salary</th></tr>
                </tfoot>

                <tbody>
                    <tr class="odd" role="row">
                        <td class="sorting_1">Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2012/10/13</td>
                        <td>$132,000</td>
                    </tr><tr class="even" role="row">
                        <td class="sorting_1">Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>28</td>
                        <td>2011/06/07</td>
                        <td>$206,850</td>
                    </tr><tr class="odd" role="row">
                        <td class="sorting_1">Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                    </tr><tr class="even" role="row">
                        <td class="sorting_1">Bruno Nash</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>38</td>
                        <td>2011/05/03</td>
                        <td>$163,500</td>
                    </tr><tr class="odd" role="row">
                        <td class="sorting_1">Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                    </tr><tr class="even" role="row">
                        <td class="sorting_1">Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2012/09/26</td>
                        <td>$217,500</td>
                    </tr><tr class="odd" role="row">
                        <td class="sorting_1">Gavin Joyce</td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>42</td>
                        <td>2010/12/22</td>
                        <td>$92,575</td>
                    </tr><tr class="even" role="row">
                        <td class="sorting_1">Hermione Butler</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2011/03/21</td>
                        <td>$356,250</td>
                    </tr><tr class="odd" role="row">
                        <td class="sorting_1">Jackson Bradshaw</td>
                        <td>Director</td>
                        <td>New York</td>
                        <td>65</td>
                        <td>2008/09/26</td>
                        <td>$645,750</td>
                    </tr><tr class="even" role="row">
                        <td class="sorting_1">Jennifer Acosta</td>
                        <td>Junior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>43</td>
                        <td>2013/02/01</td>
                        <td>$75,650</td>
                    </tr></tbody>
            </table><div aria-live="polite" role="status" id="example_info" class="dataTables_info">Showing 1 to 10 of 22 entries (filtered from 57 total entries)</div><div id="example_paginate" class="dataTables_paginate paging_simple_numbers"><a id="example_previous" tabindex="0" data-dt-idx="0" aria-controls="example" class="paginate_button previous disabled">Previous</a><span><a tabindex="0" data-dt-idx="1" aria-controls="example" class="paginate_button current">1</a><a tabindex="0" data-dt-idx="2" aria-controls="example" class="paginate_button ">2</a><a tabindex="0" data-dt-idx="3" aria-controls="example" class="paginate_button ">3</a></span><a id="example_next" tabindex="0" data-dt-idx="4" aria-controls="example" class="paginate_button next">Next</a></div></div>
    </div>
    <!-- /12. $NEW_USERS_TABLE -->
</div> <!-- / #content-wrapper -->
<div id="main-menu-bg"></div>
</div> <!-- / #main-wrapper -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').dataTable();
    });
</script>

