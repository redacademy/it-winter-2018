<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('general_manager'); ?>">General Manager:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('general_manager'); ?>" name="<?php echo $this->get_field_name('general_manager'); ?>" type="text" value="<?php echo $general_manager; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('school_director'); ?>">School Director:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('school_director'); ?>" name="<?php echo $this->get_field_name('school_director'); ?>" type="text" value="<?php echo $school_director; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('address'); ?>">Address:</label>
    <input class="widefat" id="<?php echo $this->get_field_id('address'); ?>" name="<?php echo $this->get_field_name('address'); ?>" type="text" value="<?php echo $address; ?>">
    <input class="widefat" id="<?php echo $this->get_field_id('city'); ?>" name="<?php echo $this->get_field_name('city'); ?>" type="text" value="<?php echo $city; ?>">
    <input class="widefat" id="<?php echo $this->get_field_id('postal_code'); ?>" name="<?php echo $this->get_field_name('postal_code'); ?>" type="text" value="<?php echo $postal_code; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('telephone'); ?>">Telephone:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('telephone'); ?>" name="<?php echo $this->get_field_name('telephone'); ?>" type="text" value="<?php echo $telephone; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('bookings'); ?>">Bookings:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('bookings'); ?>" name="<?php echo $this->get_field_name('bookings'); ?>" type="text" value="<?php echo $bookings; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('questions'); ?>">Questions & Comments:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('questions'); ?>" name="<?php echo $this->get_field_name('questions'); ?>" type="text" value="<?php echo $questions; ?>">
   </p>

</div>