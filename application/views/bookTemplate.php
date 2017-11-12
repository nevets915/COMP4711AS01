<h3>book add</h3>

<p>ur departure {selectedDeparture}</p>
<p>ur arrival {selectedArrival}</p>
<span style="color: red">{errorMsg}</span>

<table class="table">
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