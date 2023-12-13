<?php
    $selected = (array) Request::query('attrs',[]);
?>
<?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(empty($item['hide_in_filter_search'])): ?>
        <?php
            $translate = $item->translate();
        ?>
        <div class="g-filter-item">
            <div class="item-title">
                <h3> <?php echo e($translate->name); ?> </h3>
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </div>
            <div class="item-content">
                <ul>
                    <?php $__currentLoopData = $item->terms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $translate = $term->translate(); ?>
                        <li <?php if($key > 2 and empty($selected)): ?> class="hide" <?php endif; ?>>
                            <div class="bravo-checkbox">
                                <label>
                                    <input <?php if(in_array($term->id,$selected[$item->id] ?? [])): ?> checked <?php endif; ?> type="checkbox" name="attrs[<?php echo e($item->id); ?>][]" value="<?php echo e($term->id); ?>"> <?php echo $translate->name; ?>

                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php if(count($item->terms) > 3 and empty($selected)): ?>
                    <button type="button" class="btn btn-link btn-more-item"><?php echo e(__("More")); ?> <i class="fa fa-caret-down"></i></button>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/html/Project/BookingCore/themes/BC/Layout/global/search/filters/attrs.blade.php ENDPATH**/ ?>