<?php $__env->startSection('title', 'Đăng nhập - CourierXpress'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-orange-600">CourierXpress</h2>
            <p class="mt-2 text-sm text-gray-600">Đăng nhập vào tài khoản của bạn</p>
        </div>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow-lg rounded-lg sm:px-10">
            <?php if($errors->any()): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            
            <form class="space-y-6" action="<?php echo e(route('login.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <!-- Phone Number -->
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Số điện thoại</label>
                    <div class="mt-1 relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <span class="text-gray-500 text-sm">+84</span>
                        </div>
                        <input id="phone" name="phone" type="tel" value="<?php echo e(old('phone')); ?>" required 
                               class="appearance-none block w-full pl-12 pr-3 py-3 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                               placeholder="Nhập số điện thoại">
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Mật khẩu</label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" required 
                               class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                               placeholder="Nhập mật khẩu">
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input id="remember" name="remember" type="checkbox" 
                           class="h-4 w-4 text-orange-600 focus:ring-orange-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-900">Ghi nhớ đăng nhập</label>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" 
                            class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 transition duration-150 ease-in-out">
                        Đăng nhập
                    </button>
                </div>

                <!-- Register Link -->
                <div class="text-center">
                    <p class="text-sm text-gray-600">
                        Chưa có tài khoản?
                        <a href="<?php echo e(route('register')); ?>" class="font-medium text-orange-600 hover:text-orange-500">
                            Đăng ký ngay
                        </a>
                    </p>
                </div>
            </form>
            
            <!-- Test Account Info -->
            <div class="mt-6 p-4 bg-blue-50 rounded-lg">
                <h3 class="text-sm font-semibold text-blue-800 mb-2">Tài khoản test:</h3>
                <p class="text-xs text-blue-700">Phone: 0123456789</p>
                <p class="text-xs text-blue-700">Password: 123456</p>
                <p class="text-xs text-blue-700 mt-1">Admin Phone: 0901234567</p>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\CourierXpress\resources\views/auth/login.blade.php ENDPATH**/ ?>