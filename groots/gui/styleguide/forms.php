<form class="form" action="" data-parsley-validate novalidate gr-form>
    <fieldset>
        <h3 class="gui-item__subtitle">Natives Inputs</h3>
        <div class="form-item" >
            <label for="exampleInputTextl">Name</label>
            <input type="text" id="exampleInputTextl" placeholder="Example of Text Input" required>
        </div>
        <div class="form-item">
            <label for="exampleInputEmail2">Email address</label>
            <input type="email" id="exampleInputEmail2" placeholder="Example of Email Input" required>

        </div>
        <div class="form-item">
            <label for="exampleInputPassword">Password</label>
            <input type="password" id="exampleInputPassword" placeholder="Example of Password Input" required>
        </div>
        <div class="form-item">
            <label for="exampleInputPassword">Message</label>
            <textarea placeholder="Example of Textarea" required></textarea>
        </div>

        <h3 class="gui-item__subtitle">Custom Select</h3>
        <div class="form-item">
            <label for="select-gui">Country</label>
            <select name="" id="select-gui" gr-select required>
                <option disabled selected value="hide">Select ...</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="4">Option 4</option>
            </select>
        </div>

        <h3 class="gui-item__subtitle">Custom Upload</h3>
        <div class="form-item" >
            <input type="file" id="file-upload--input" name="file-upload--input" multiple required>
            <label for="file-upload--input">Upload file</label>
        </div>

        <h3 class="gui-item__subtitle">Custom Radio</h3>
        <div class="form-item">
            <input type="radio" name="opt-in-out" id="opt-in" data-parsley-multiple="opt-in-out" gr-radio required>
            <label for="opt-in">Opt IN</label>
            <input type="radio" name="opt-in-out" id="opt-out" data-parsley-multiple="opt-in-out" gr-radio>
            <label for="opt-out">Opt OUT</label>
        </div>

        <div class="form-item">
            <input type="radio" name="contact_title" id="f" required="" data-parsley-multiple="contact_title" gr-radio required>
            <label for="f">Mme, Mlle</label>
            <input type="radio" name="contact_title" id="m" data-parsley-multiple="contact_title" gr-radio>
            <label for="m">Monsieur</label>
        </div>

        <h3 class="gui-item__subtitle">Custom Checkbox</h3>
        <div class="form-item">
            <input type="checkbox" name="rememberme" id="rememberme" required>
            <label for="rememberme">Remember me</label>
        </div>
        <hr>
        <button class="btn--primary">Submit</button>
    </fieldset>
</form>
