<!-- This file is used to markup the public-facing widget. -->

<ul>
<?php if(strlen( trim( $general_manager ) )>0): ?>
<li>
  <span>General Manager:</span>
  <?php echo $general_manager; ?>
</li>
<?php endif; ?>

<?php if(strlen( trim( $school_director ) )>0): ?>
<li>
  <span>School Director:</span>
  <?php echo $school_director; ?>
</li>
<?php endif; ?>

<?php if(strlen( trim( $address ) )>0): ?>
<li>
  <span>Address:</span>
  <div>
    <?php echo $address; ?><br>
    <?php echo $city; ?><br>
    <?php echo $postal_code; ?>
  </div>
</li>
<?php endif; ?>

<?php if(strlen( trim( $telephone ) )>0): ?>
<li>
  <span>Telephone:</span>
  <?php echo $telephone; ?>
</li>
<?php endif; ?>

<?php if(strlen( trim( $bookings ) )>0): ?>
<li>
  <span>Bookings:</span>
  <?php echo $bookings; ?>
</li>
<?php endif; ?>

<?php if(strlen( trim( $questions ) )>0): ?>
<li>
  <span>Questions & Comments:</span>
  <?php echo $questions; ?>
</li>
<?php endif; ?>

</ul>