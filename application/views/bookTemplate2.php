<h3>Select Flight</h3>

<p>Departure: {selectedDeparture}</p>
<p>Arrival1: {selectedArrival1}</p>
<p>Arrival2: {selectedArrival2}</p>
<p>Arrival3: {selectedArrival3}</p>

<span style="color: red">{errorMsg}</span>

<tr class="table">
    <form role="form" action="book" method="POST">
    <h3>Stops</h3>

    <h5>1st Flight</h5><span style="color: red">{errorMsg1}</span>
    <table>
        <tr style="background-color: #0e0e0e; color: #ffffff;">
            <th >
                Flight
            </th>
            <th>
                Departure
            </th>
            <th>
                Arrival
            </th>
            <th>
                Dep. Time
            </th>
            <th>
                Arr. Time
            </th>
        </tr>
        {flight1}
        <tr>
            <td style="text-align: left;" class="pad_left1">
                {PlaneID}
            </td>
            <td>
                {DepartureAirport}
            </td>
            <td>
                {ArrivalAirport}
            </td>
            <td>
                {DepartureTime}
            </td>
            <td>
                {ArrivalTime}
            </td>
            <td>
                <input type='checkbox' name='plane1{id}' />
            </td>
        </tr>
        {/flight1}
    </table>

    <h5>2nd Flight</h5><span style="color: red">{errorMsg2}</span>
    <table>

        <tr style="background-color: #0e0e0e; color: #ffffff;">
            <th >
                Flight
            </th>
            <th>
                Departure
            </th>
            <th>
                Arrival
            </th>
            <th>
                Dep. Time
            </th>
            <th>
                Arr. Time
            </th>
        </tr>
        {flight2}
        <tr>
            <td style="text-align: left;" class="pad_left1">
                {PlaneID}
            </td>
            <td>
                {DepartureAirport}
            </td>
            <td>
                {ArrivalAirport}
            </td>
            <td>
                {DepartureTime}
            </td>
            <td>
                {ArrivalTime}
            </td>
            <td>
                <input type='checkbox' name='plane2{id}' />
            </td>
        </tr>
        {/flight2}
    </table>

    <h5>3rd Flight</h5><span style="color: red">{errorMsg3}</span>
    <table>
        <tr style="background-color: #0e0e0e; color: #ffffff;">
            <th >
                Flight
            </th>
            <th>
                Departure
            </th>
            <th>
                Arrival
            </th>
            <th>
                Dep. Time
            </th>
            <th>
                Arr. Time
            </th>
        </tr>
        {flight3}
        <tr>
            <td style="text-align: left;" class="pad_left1">
                {PlaneID}
            </td>
            <td>
                {DepartureAirport}
            </td>
            <td>
                {ArrivalAirport}
            </td>
            <td>
                {DepartureTime}
            </td>
            <td>
                {ArrivalTime}
            </td>
            <td>
                <input type='checkbox' name='plane3{id}' />
            </td>
        </tr>
        {/flight3}
    </table>
        <input type='submit' value='Submit book'/>
    </form>
