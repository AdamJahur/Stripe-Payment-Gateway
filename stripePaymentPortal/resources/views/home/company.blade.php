@extends('homeLayout')

@section('title', 'companyHome')
@section('sectionName', 'Search for Accounts')

@section('content')
<figure style="text-align: center;">
    <figcaption>
        Chart of Expenses
    </figcaption>

    <div class="buttons"></div>

    <svg width="100" height="100" class="chart">
        <circle r="50" cx="50" cy="50" class="pie"></circle>
    </svg>
</figure>

<div class="row" style="margin-top: 250px;">
    <div class="col-md-4">
        <h2>Total Paid - $1000.00</h2>
    </div>
    <div class="col-md-4">
        <h2>Total Unpaid - $1700.00</h2>
    </div>
    <div class="col-md-4">
        <h2>Total Income To Date - $7000.00</h2>
    </div>
    <div class="" style="margin-top: 100px; width: 100%; margin-left: 20px;">
        <table>
            <tr>
                <th>Name</th>
                <th>Account Number</th>
                <th>Amount Due</th>
                <th>Service/Receipt Number</th>
                <th>Date of Purchase</th>
                <th>Due Date</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>Nick</td>
                <td>519546</td>
                <td>$400</td>
                <td>Garbage Collection</td>
                <td>03/03/03</td>
                <td>03/08/08</td>
                <td>Unpaid</td>
            </tr>

        </table>
    </div>
</div>



<script type="text/javascript">

    var total = 5000,
        buttons = document.querySelector('.buttons'),
        pie = document.querySelector('.pie'),
        activeClass = 'active';

    var expenses = {
        Paid: 4000,
        Unpaid: 1000,
    };

    // work out percentage as a result of total
    var numberFixer = function(num){
        var result = ((num * total) / 100);
        return result;
    }

    // create a button for each country
    for(property in expenses){
        var newEl = document.createElement('button');
        newEl.innerText = property;
        newEl.setAttribute('data-name', property);
        buttons.appendChild(newEl);
    }

    // when you click a button setPieChart and setActiveClass
    buttons.addEventListener('click', function(e){
        if(e.target != e.currentTarget){
            var el = e.target,
                name = el.getAttribute('data-name');
            setPieChart(name);
            setActiveClass(el);
        }
        e.stopPropagation();
    });

    var setPieChart = function(name){
        var number = expenses[name],
            fixedNumber = numberFixer(number),
            result = fixedNumber + ' ' + total;

        pie.style.strokeDasharray = result;
    }

    var setActiveClass = function(el) {
        for(var i = 0; i < buttons.children.length; i++) {
            buttons.children[i].classList.remove(activeClass);
            el.classList.add(activeClass);
        }
    }

    // Set up default settings
    setPieChart('Unpaid');
    setActiveClass(buttons.children[0]);
</script>

@stop