<section id="dashboard" class="dashboard">
    <h1>Manage Applications</h1>
    <div class="nav-panel">
        <!-- works as filters -->
        <ul>
            <li>
                <a href="#manage-applications">All</a>
            </li>
            <li>
                <a href="#Pending-applications">Pending</a>
            </li>
            <li>
                <a href="#Declined">Declined</a>
            </li>
            <li>
                <a href="#Approved">Approved </a>
            </li>

        </ul>
    </div>
    <div class="dashboard-content">
        <div class="search-bar">
            <form action="GET">
                <input type="text" name="search_item" id="searchItem">
                <input type="submit" name="search" value="SEARCH">
            </form>
        </div>
        <div class="applications">
            <div>
                <!-- to be fetched from database -->
                <a href="./viewApplication?id=99" class="application">
                
                        <h2>Applicant Name</h2>
                        <h4>Credit Score: 999</h4>
                        <h4>Category: Excelent</h4>
                
                </a>
                <a href="#applicaion1" class="application">
                
                        <h2>Applicant Name</h2>
                        <h4>Credit Score: 999</h4>
                        <h4>Category: Excelent</h4>
                
                </a>
                <a href="#applicaion1" class="application">
                
                        <h2>Applicant Name</h2>
                        <h4>Credit Score: 999</h4>
                        <h4>Category: Excelent</h4>
                
                </a>
            </div>
        </div>
    </div>
</section>