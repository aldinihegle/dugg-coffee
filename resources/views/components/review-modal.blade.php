<!-- Success Alert -->
@if(session('success'))
    <div id="successAlert" class="fixed top-4 right-4 bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg shadow-lg z-50">
        <div class="flex items-center">
            <i class="fas fa-check-circle mr-2"></i>
            <span>{{ session('success') }}</span>
        </div>
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('successAlert').style.display = 'none';
        }, 5000);
    </script>
@endif

<!-- Error Alert -->
@if(session('error'))
    <div id="errorAlert" class="fixed top-4 right-4 bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded-lg shadow-lg z-50">
        <div class="flex items-center">
            <i class="fas fa-exclamation-circle mr-2"></i>
            <span>{{ session('error') }}</span>
        </div>
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('errorAlert').style.display = 'none';
        }, 5000);
    </script>
@endif

<!-- Review Modal -->
<div id="reviewModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Make A Review</h2>
            <button onclick="closeReviewModal()" class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <form action="{{ route('reviews.store') }}" method="POST" class="space-y-6" id="reviewForm" onsubmit="return validateReviewForm()">
            @csrf
            <div>
                <label class="block text-gray-700 text-lg mb-2" for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Your Name..." required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
            </div>

            <div>
                <label class="block text-gray-700 text-lg mb-2" for="comment">Message</label>
                <textarea name="comment" id="comment" rows="4" placeholder="Your Review..." required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"></textarea>
            </div>

            <div>
                <label class="block text-gray-700 text-lg mb-2">Rate</label>
                <div class="flex gap-4" id="ratingStars">
                    @for($i = 1; $i <= 5; $i++)
                        <button type="button" onclick="setRating({{ $i }})" class="text-3xl text-gray-300 hover:text-yellow-400 focus:outline-none star-rating">
                            ★
                        </button>
                    @endfor
                </div>
                <input type="hidden" name="rating" id="ratingInput" value="" required>
                <div id="ratingError" class="text-red-500 text-sm mt-1 hidden">Please select a rating</div>
            </div>

            <button type="submit" class="w-full bg-[#009EF5] hover:bg-blue-600 text-white font-bold py-3 px-4 rounded-lg transition-colors">
                SUBMIT
            </button>
        </form>
    </div>
</div>

@push('scripts')
<script>
    function validateReviewForm() {
        const rating = document.getElementById('ratingInput').value;
        const ratingError = document.getElementById('ratingError');
        
        if (!rating) {
            ratingError.classList.remove('hidden');
            return false;
        }
        
        ratingError.classList.add('hidden');
        return true;
    }

    function openReviewModal() {
        document.getElementById('reviewModal').classList.remove('hidden');
        document.getElementById('reviewModal').classList.add('flex');
        document.body.style.overflow = 'hidden';
        // Reset form when opening modal
        document.getElementById('reviewForm').reset();
        // Reset stars
        document.querySelectorAll('.star-rating').forEach(star => {
            star.classList.remove('text-yellow-400');
            star.classList.add('text-gray-300');
        });
        document.getElementById('ratingInput').value = '';
        document.getElementById('ratingError').classList.add('hidden');
    }

    function closeReviewModal() {
        document.getElementById('reviewModal').classList.add('hidden');
        document.getElementById('reviewModal').classList.remove('flex');
        document.body.style.overflow = 'auto';
    }

    function setRating(rating) {
        document.getElementById('ratingInput').value = rating;
        const stars = document.querySelectorAll('.star-rating');
        stars.forEach((star, index) => {
            if (index < rating) {
                star.classList.add('text-yellow-400');
                star.classList.remove('text-gray-300');
            } else {
                star.classList.remove('text-yellow-400');
                star.classList.add('text-gray-300');
            }
        });
        document.getElementById('ratingError').classList.add('hidden');
    }

    // Close modal when clicking outside
    document.getElementById('reviewModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeReviewModal();
        }
    });

    // Debug form submission
    document.getElementById('reviewForm').addEventListener('submit', function(e) {
        const formData = new FormData(this);
        console.log('Form data being submitted:');
        for (let pair of formData.entries()) {
            console.log(pair[0] + ': ' + pair[1]);
        }
    });
</script>
@endpush 