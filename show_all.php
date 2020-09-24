<?php include "head_nav.php"; 

$showall_sql="SELECT *
FROM `91879_book_reviews`
ORDER BY `91879_book_reviews`.`Title` ASC";
$showall_query=mysqli_query($dbconnect, $showall_sql);
$showall_rs=mysqli_fetch_assoc($showall_query);
$count=mysqli_num_rows($showall_query);


?>

<div class="box main">

    <h2>All Items</h2>
    
    <?php
    
    // check if there are any results
    
    if ($count<1)
        
    {
        
    ?>
    
    <div class="error">
        Sorry! There are no results that match your search.
        Please use the search box in the sidebar to try again.
        
    </div>
        
    <?php
        
    } // end count 'if'title_search.php
    
    // if there are not results, output error
    else {
        
        do {
            
        ?>
    
     <!-- Results go here -->
    <div class="results">
                
        <p>Title: <span class="sub_heading"><?php echo $showall_rs['Title']; ?></span>
        </p> 
                
        <p>Author: <span class="sub_heading"><?php echo $showall_rs['Author']; ?></span>
        </p>
                
        <p>Genre: <span class="sub_heading"><?php echo $showall_rs['Genre']; ?></span>
        </p>
                
        <p>Rating: <span class="sub_heading">
            
            <?php 
            for ($x=0; $x < $showall_rs['Rating']; $x++)
                
            {
                echo "&#9733;";
            }
            
            ?>
            
        </span></p>
                
        <p><span class="sub_heading"><?php echo $showall_rs['Review']; ?></span></p>
                
        <p>
            Review Placeholder
                
        </p>
                
                
            
    </div> <!-- / end results -->
    
    <br />
    
    <?php
            
        } // end of 'do'
        
        while($showall_rs=mysqli_fetch_assoc($showall_query));
        
      } // end else
    
     // if there are results, diplay them
    
    ?>
            


</div>    <!-- / main -->
        
<?php include "bottombit.php" ; ?>