<x-guest-layout>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
  <div class="container mx-auto py-8">
    <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
      <form>
        <x-step1/>
        <h2 class="text-2xl font-semibold mb-6">Step 2</h2>
        <div class="mb-4">
          <label for="full-name" class="block text-gray-700 font-medium mb-2">Full Name*</label>
          <input type="text" id="full-name" name="full-name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
          <label for="nic-number" class="block text-gray-700 font-medium mb-2">NIC Number*</label>
          <input type="text" id="nic-number" name="nic-number" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
          <label for="whatsapp-number" class="block text-gray-700 font-medium mb-2">Whatsapp Number*</label>
          <input type="text" id="whatsapp-number" name="whatsapp-number" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
          <label for="email" class="block text-gray-700 font-medium mb-2">Email ID*</label>
          <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
          <label for="dob" class="block text-gray-700 font-medium mb-2">Date of Birth*</label>
          <input type="date" id="dob" name="dob" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
          <label for="qualification" class="block text-gray-700 font-medium mb-2">Qualification*</label>
          <select id="qualification" name="qualification" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
            <option value="No formal Education">No formal Education</option>
            <option value="Below Matric">Below Matric</option>
            <option value="Matriculation">Matriculation</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Bachelors">Bachelors</option>
            <option value="Masters">Masters</option>
          </select>
        </div>

        <div class="mb-4">
          <label for="profession" class="block text-gray-700 font-medium mb-2">Profession*</label>
          <select id="profession" name="profession" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
            <option value="Teacher">Teacher</option>
            <option value="Student">Student</option>
            <option value="Self-employed">Self-employed</option>
            <option value="Salaried">Salaried</option>
            <option value="Business">Business</option>
            <option value="Homemaker">Homemaker</option>
          </select>
        </div>

        <!-- Add other fields as needed -->

        <div class="mb-4">
          <label for="training-year" class="block text-gray-700 font-medium mb-2">Training Year*</label>
          <input type="date" id="training-year" name="training-year" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
          <label for="status" class="block text-gray-700 font-medium mb-2">Status*</label>
          <select id="status" name="status" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
          </select>
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none">Submit</button>
      </form>
    </div>
  </div>
</x-guest-layout>
