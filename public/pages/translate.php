<div class="card text-center h-100">
    <div class="card-header d-flex justify-content-between">
        <div class="btn-group d-inline-block" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-success" id="translate_start">Start (spacebar)</button>
            <button type="button" class="btn btn-primary" id="translate_continue">Continue (right arrow)</button>
            <button type="button" class="btn btn-danger" id="translate_stop">Stop</button>
        </div>
        <input title="timer" type="email" class="form-control d-inline-block p-0 w-auto" id="translate_delay"
            placeholder="delay" value="10">
    </div>
    <div class="card-body d-flex flex-column">
        <h3 class="card-title flex-fill" id="translate_question">Special title treatment</h3>
        <div class="card-text" id="translate_answer"></div>
        <div class="progress mt-3" role="progressbar" aria-label="Example 30px high" aria-valuenow="0" aria-valuemin="0"
            aria-valuemax="100" style="height: 30px">
            <div id="translate_progress_bar" class="progress-bar" style="width: 0%"></div>
        </div>
    </div>
    <div class="card-footer text-body-secondary">
        <div class="">
            <h4>Keyboard buttons control:</h4>
            <div>
                [del] - delete the sentence
            </div>
            <div>
                <i class="fa-solid fa-square-caret-left"></i> - return
                last card
            </div>
            <div>
                <i class="fa-solid fa-square-caret-right"></i> - call next
                card
            </div>
            <div>
                <i class="fa-solid fa-square-caret-up"></i><i class="fa-solid fa-square-caret-down"></i> - To
                increase or decrease the delay time by 0.5 second
            </div>
            <div>[Spacebar] - start from begining</div>
        </div>
    </div>
</div>