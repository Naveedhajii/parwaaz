<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
      <h2 class="text-2xl font-semibold mb-6">Prenatal Sessions</h2>
      <form>
        <x-step1/>
<h2 class="text-2xl font-semibold mb-6">Step 02</h2>
        
        <div class="mb-4">
          <label for="session-date" class="block text-gray-700 font-medium mb-2">Prenatal Session Date*</label>
          <input type="date" id="session-date" name="session-date" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
          <label for="parwaaz-coordinator" class="block text-gray-700 font-medium mb-2">Parwaaz Coordinator*</label>
          <input type="text" id="parwaaz-coordinator" name="parwaaz-coordinator" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
          <label for="facilitator-names" class="block text-gray-700 font-medium mb-2">Facilitator Name(s)*</label>
          <input type="text" id="facilitator-names" name="facilitator-names" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
        </div>

        <h2 class="text-xl font-semibold mb-4">Step 3</h2>

        <div class="mb-4">
          <label for="mother-name" class="block text-gray-700 font-medium mb-2">Mother Name*</label>
          <input type="text" id="mother-name" name="mother-name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
          <label for="mother-cnic" class="block text-gray-700 font-medium mb-2">CNIC Number*</label>
          <input type="text" id="mother-cnic" name="mother-cnic" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
          <label for="mother-mobile" class="block text-gray-700 font-medium mb-2">Mobile Number*</label>
          <input type="text" id="mother-mobile" name="mother-mobile" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
          <label for="guardian-name" class="block text-gray-700 font-medium mb-2">Guardian Name*</label>
          <input type="text" id="guardian-name" name="guardian-name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
          <label for="guardian-relation" class="block text-gray-700 font-medium mb-2">Guardian Relation*</label>
          <select id="guardian-relation" name="guardian-relation" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
            <option value="Mother">Mother</option>
            <option value="Father">Father</option>
            <option value="Brother">Brother</option>
            <option value="Sister">Sister</option>
            <option value="Grand Father">Grand Father</option>
            <option value="Grand Mother">Grand Mother</option>
          </select>
        </div>

        <!-- Add other form fields as needed -->

        <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none">Submit</button>
      </form>
    </div>
</x-guest-layout>
