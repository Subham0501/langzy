<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - Langzy</title>
    @include('components.shared-assets')
</head>
<body class="font-inter bg-gray-50">
    <!-- Navigation -->
    @include('components.nav')

    <!-- Privacy Policy Content -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h1 class="text-4xl font-bold text-langzy-dark mb-8">Privacy Policy</h1>
            <p class="text-gray-600 mb-8">Last updated: {{ date('F d, Y') }}</p>

            <div class="prose prose-lg max-w-none">
                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">1. Information We Collect</h2>
                <p class="text-gray-700 mb-4">We collect information you provide directly to us, such as when you:</p>
                <ul class="list-disc pl-6 text-gray-700 mb-6">
                    <li>Create an account</li>
                    <li>Book counselling sessions</li>
                    <li>Contact us for support</li>
                    <li>Subscribe to our newsletter</li>
                </ul>
                <p class="text-gray-700 mb-6">
                    This information may include your name, email address, phone number, payment information, and any other information you choose to provide.
                </p>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">2. Information We Collect Automatically</h2>
                <p class="text-gray-700 mb-4">When you use our service, we automatically collect certain information, including:</p>
                <ul class="list-disc pl-6 text-gray-700 mb-6">
                    <li>Log information (IP address, browser type, pages visited)</li>
                    <li>Device information (device type, operating system)</li>
                    <li>Usage information (how you interact with our service)</li>
                    <li>Cookies and similar tracking technologies</li>
                </ul>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">3. How We Use Your Information</h2>
                <p class="text-gray-700 mb-4">We use the information we collect to:</p>
                <ul class="list-disc pl-6 text-gray-700 mb-6">
                    <li>Provide, maintain, and improve our services</li>
                    <li>Process transactions and send related information</li>
                    <li>Send technical notices, updates, and support messages</li>
                    <li>Respond to your comments and questions</li>
                    <li>Personalize your experience</li>
                    <li>Monitor and analyze trends and usage</li>
                </ul>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">4. Counselling Session Data</h2>
                <p class="text-gray-700 mb-4">For counselling sessions, we collect and store:</p>
                <ul class="list-disc pl-6 text-gray-700 mb-6">
                    <li>Session scheduling information</li>
                    <li>Payment and billing details</li>
                    <li>Session notes (with your consent)</li>
                    <li>Communication between you and your instructor</li>
                </ul>
                <p class="text-gray-700 mb-6">
                    This information is used to provide you with the best possible learning experience and to maintain records of your progress.
                </p>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">5. Information Sharing</h2>
                <p class="text-gray-700 mb-4">We may share your information in the following circumstances:</p>
                <ul class="list-disc pl-6 text-gray-700 mb-6">
                    <li>With your consent</li>
                    <li>With service providers who assist us in operating our platform</li>
                    <li>To comply with legal obligations</li>
                    <li>To protect our rights and prevent fraud</li>
                    <li>In connection with a business transfer or acquisition</li>
                </ul>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">6. Data Security</h2>
                <p class="text-gray-700 mb-6">
                    We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet or electronic storage is 100% secure.
                </p>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">7. Data Retention</h2>
                <p class="text-gray-700 mb-6">
                    We retain your personal information for as long as necessary to provide our services and fulfill the purposes outlined in this privacy policy, unless a longer retention period is required or permitted by law.
                </p>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">8. Your Rights</h2>
                <p class="text-gray-700 mb-4">You have the right to:</p>
                <ul class="list-disc pl-6 text-gray-700 mb-6">
                    <li>Access your personal information</li>
                    <li>Correct inaccurate or incomplete information</li>
                    <li>Delete your personal information</li>
                    <li>Object to the processing of your information</li>
                    <li>Data portability</li>
                    <li>Withdraw consent at any time</li>
                </ul>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">9. Cookies and Tracking</h2>
                <p class="text-gray-700 mb-4">We use cookies and similar technologies to:</p>
                <ul class="list-disc pl-6 text-gray-700 mb-6">
                    <li>Remember your preferences and settings</li>
                    <li>Analyze how you use our service</li>
                    <li>Provide personalized content</li>
                    <li>Improve our service performance</li>
                </ul>
                <p class="text-gray-700 mb-6">
                    You can control cookies through your browser settings, but disabling cookies may affect the functionality of our service.
                </p>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">10. Third-Party Services</h2>
                <p class="text-gray-700 mb-6">
                    Our service may contain links to third-party websites or services. We are not responsible for the privacy practices of these third parties. We encourage you to read their privacy policies before providing any personal information.
                </p>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">11. Children's Privacy</h2>
                <p class="text-gray-700 mb-6">
                    Our service is not intended for children under 13 years of age. We do not knowingly collect personal information from children under 13. If you are a parent or guardian and believe your child has provided us with personal information, please contact us.
                </p>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">12. International Data Transfers</h2>
                <p class="text-gray-700 mb-6">
                    Your information may be transferred to and processed in countries other than your own. We ensure that such transfers comply with applicable data protection laws and that appropriate safeguards are in place.
                </p>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">13. Changes to This Policy</h2>
                <p class="text-gray-700 mb-6">
                    We may update this privacy policy from time to time. We will notify you of any changes by posting the new privacy policy on this page and updating the "Last updated" date.
                </p>

                <h2 class="text-2xl font-semibold text-langzy-dark mb-4">14. Contact Us</h2>
                <p class="text-gray-700 mb-6">
                    If you have any questions about this privacy policy or our privacy practices, please contact us at:
                </p>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-700"><strong>Email:</strong> privacy@langzy.com</p>
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
