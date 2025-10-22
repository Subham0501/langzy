<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service - Langzy</title>
    @include('components.shared-assets')
</head>
<body class="font-inter bg-gray-50">
    <!-- Navigation -->
    @include('components.nav')

    <!-- Terms of Service Content -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h1 class="text-4xl font-bold text-langzy-dark mb-8">Terms of Service</h1>
            <p class="text-gray-600 mb-8">Last updated: {{ date('F d, Y') }}</p>

            <div class="prose prose-lg max-w-none">
                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">1. Acceptance of Terms</h2>
                <p class="text-gray-700 mb-6">
                    By accessing and using Langzy's language learning platform, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.
                </p>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">2. Use License</h2>
                <p class="text-gray-700 mb-4">
                    Permission is granted to temporarily download one copy of the materials on Langzy's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:
                </p>
                <ul class="list-disc pl-6 text-gray-700 mb-6">
                    <li>Modify or copy the materials</li>
                    <li>Use the materials for any commercial purpose or for any public display</li>
                    <li>Attempt to reverse engineer any software contained on the website</li>
                    <li>Remove any copyright or other proprietary notations from the materials</li>
                </ul>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">3. Counselling Services</h2>
                <p class="text-gray-700 mb-4">
                    Langzy provides paid counselling sessions with qualified language instructors. By booking a session, you agree to:
                </p>
                <ul class="list-disc pl-6 text-gray-700 mb-6">
                    <li>Pay the specified fee before the session begins</li>
                    <li>Attend the session at the scheduled time</li>
                    <li>Provide 24-hour notice for cancellations to receive a full refund</li>
                    <li>Respect the instructor and maintain professional conduct during sessions</li>
                </ul>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">4. User Accounts</h2>
                <p class="text-gray-700 mb-6">
                    When you create an account with us, you must provide information that is accurate, complete, and current at all times. You are responsible for safeguarding the password and for all activities that occur under your account.
                </p>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">5. Privacy Policy</h2>
                <p class="text-gray-700 mb-6">
                    Your privacy is important to us. Please review our Privacy Policy, which also governs your use of the service, to understand our practices.
                </p>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">6. Prohibited Uses</h2>
                <p class="text-gray-700 mb-4">You may not use our service:</p>
                <ul class="list-disc pl-6 text-gray-700 mb-6">
                    <li>For any unlawful purpose or to solicit others to perform unlawful acts</li>
                    <li>To violate any international, federal, provincial, or state regulations, rules, laws, or local ordinances</li>
                    <li>To infringe upon or violate our intellectual property rights or the intellectual property rights of others</li>
                    <li>To harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate</li>
                    <li>To submit false or misleading information</li>
                </ul>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">7. Content</h2>
                <p class="text-gray-700 mb-6">
                    Our service allows you to post, link, store, share and otherwise make available certain information, text, graphics, videos, or other material. You are responsible for the content that you post to the service, including its legality, reliability, and appropriateness.
                </p>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">8. Termination</h2>
                <p class="text-gray-700 mb-6">
                    We may terminate or suspend your account and bar access to the service immediately, without prior notice or liability, under our sole discretion, for any reason whatsoever and without limitation, including but not limited to a breach of the Terms.
                </p>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">9. Disclaimer</h2>
                <p class="text-gray-700 mb-6">
                    The information on this website is provided on an "as is" basis. To the fullest extent permitted by law, this Company excludes all representations, warranties, conditions and terms relating to our website and the use of this website.
                </p>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">10. Governing Law</h2>
                <p class="text-gray-700 mb-6">
                    These Terms shall be interpreted and governed by the laws of Nepal, without regard to its conflict of law provisions. Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights.
                </p>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">11. Changes to Terms</h2>
                <p class="text-gray-700 mb-6">
                    We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material, we will provide at least 30 days notice prior to any new terms taking effect.
                </p>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">12. Contact Information</h2>
                <p class="text-gray-700 mb-6">
                    If you have any questions about these Terms of Service, please contact us at:
                </p>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-700"><strong>Email:</strong> info@langzy.com</p>
                    <p class="text-gray-700"><strong>Phone:</strong> +977 9701369495</p>
                    <p class="text-gray-700"><strong>Address:</strong> Kathmandu, Nepal</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('components.footer-section')
</body>
</html>
