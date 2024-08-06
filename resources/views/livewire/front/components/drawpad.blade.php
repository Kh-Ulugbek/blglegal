<div style="touch-action: none">
    <div class="flex flex-wrap">
        <canvas width="400" height="200" class="border border-gray-300" style="border-radius: 25px" id="signatureCanvas"></canvas>
    </div>
    <div class="mt-2 flex justify-between">
        <button id="clear" type="button" style="min-width: 80px"
                class="rounded-md bg-gray-600 px-3 py-2
                          font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline
                          focus-visible:outline-2 focus-visible:outline-offset-2
                          focus-visible:outline-gray-600 text-center">
            Clear
        </button>
        <button id="submitBtn" type="button" style="min-width: 50px"
                class="inline-flex rounded-md bg-emerald-600 px-3 py-2
                          font-semibold text-white shadow-sm hover:bg-emerald-500 focus-visible:outline
                          focus-visible:outline-2 focus-visible:outline-offset-2
                          focus-visible:outline-emerald-600">
            Submit
        </button>
    </div>
</div>

@script

<script>
    const canvas = document.getElementById('signatureCanvas');
    const clearBtn = document.getElementById('clear');
    const ctx = canvas.getContext('2d');

    let isDrawing = false;
    let lastX = 0;
    let lastY = 0;
    let hue = 0;

    function draw(e) {
        if (!isDrawing) return;
        ctx.strokeStyle = `hsl(${hue})`;
        ctx.beginPath();
        ctx.moveTo(lastX, lastY);
        ctx.lineTo(e.clientX - e.target.getBoundingClientRect().x, e.clientY - e.target.getBoundingClientRect().y);
        ctx.stroke();
        ctx.lineWidth = 1;
        lastX = e.clientX - e.target.getBoundingClientRect().x;
        lastY = e.clientY - e.target.getBoundingClientRect().y;
    }

    // canvas.addEventListener('mousedown', (e) => {
    //     isDrawing = true;
    //     lastX = e.clientX - e.target.getBoundingClientRect().x;
    //     lastY = e.clientY - e.target.getBoundingClientRect().y;
    // });

    canvas.addEventListener('pointerdown', (e) => {
        isDrawing = true;
        ctx.beginPath();
        lastX = e.clientX - e.target.getBoundingClientRect().x;
        lastY = e.clientY - e.target.getBoundingClientRect().y;
        ctx.moveTo(lastX, lastY)
    });

    // canvas.addEventListener('mousemove', draw);
    // canvas.addEventListener('mouseup', () => isDrawing = false);
    // canvas.addEventListener('mouseout', () => isDrawing = false);

    canvas.addEventListener('pointermove', draw);
    canvas.addEventListener('pointerup', () => isDrawing = false);

    function m_draw(e) {
        if (!isDrawing) return;
        lastX = e.clientX - e.target.getBoundingClientRect().x;
        lastY = e.clientY - e.target.getBoundingClientRect().y;
        ctx.lineTo(lastX, lastY);
        ctx.stroke();
        ctx.lineWidth = 1;
    }

    clearBtn.addEventListener('click', (e) => {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
    });
</script>
@endscript
