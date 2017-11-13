<h3>Successfully booked</h3>

<p>Departure: {selectedDeparture}</p>
<p>Arrival: {selectedArrival}</p>
<span style="color: red">{errorMsg}</span>

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
    </tr>
    {/flight}
</table>
