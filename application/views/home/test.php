<!-- Landing page -->
<div class="landing-page">
    <div class="flex-item" style="background: #d4e3fe;">
        <div class="container" style="height: 100%">
            <div>A</div>
            <div>B</div>
        </div>
    </div>
    <div class="flex-item" style="background: #ffffff; height: 250px;">
        <div class="container">
            <div class="row">
                <div class="col">Column 1</div>
                <div class="col">Column 2</div>
                <div class="col">Column 3</div>
                <div class="col">Column 4</div>
                <div class="col">Column 5</div>
                <div class="col">Column 6</div>
                <div class="col">Column 7</div>
                <div class="col">Column 8</div>
            </div>
        </div>
    </div>
</div>

<!-- Are you looking -->
<div class="section" style="background: #e5e5e5;">
    <div class="container">
        <div class="row">
            <div class="col">Customer</div>
            <div class="col">Professional</div>
        </div>
    </div>
</div>

<style>
	
    .landing-page {
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 100vh;
        background: #ffffff;
    }

    .flex-item {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
    }

    .col {
        flex: 1 1 calc(25% - 20px); /* Adjust the width of columns */
        margin: 10px;
        padding: 30px 20px;
        border: 1px solid #e5e5e5;
        box-sizing: border-box;
    }

    @media (max-width: 768px) {
        .col {
            flex: 1 1 calc(50% - 20px); /* Adjust the width of columns for smaller screens */
        }
    }

    @media (max-width: 480px) {
        .col {
            flex: 1 1 calc(100% - 20px); /* Adjust the width of columns for very small screens */
        }
    }
</style>
