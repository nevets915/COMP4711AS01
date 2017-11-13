<h3>Select Flight</h3>

<p>Departure: {selectedDeparture}</p>
<p>Arrival: {selectedArrival}</p>
<span style="color: red">{errorMsg}</span>

<tr class="table">
    <form role="form" action="book" method="post">
    <table>
        <h3>Non-stop</h3>
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
        {flight}
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
                <input type='submit' value='Select'/>
            </td>
        </tr>
        {/flight}
    </table>
    </form>
