<div>
   <div>
        <form
            wire:submit="changeName()"
        >
            <h1>Hello, {{ $name }}!</h1>
            <input 
                id = "newName"
                type="text" 
                wire:model.live.debounce="name" class="block w-full p-4 border" placeholder="Enter your name">
            <button 
                type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                >Change Name
            </button>
        </form>

   </div>
</div>
