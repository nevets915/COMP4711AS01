<h3>book add</h3>

<p>Departure: {selectedDeparture}</p>
<p>Arrival: {selectedArrival}</p>
<span style="color: red">{errorMsg}</span>

<tr class="table">
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
        </tr>
        {/flight}
    </table>

    <br /><br /><br />
    <table>
        <h3>Stops</h3>
        <tr>
            <th>
                Departure
            </th>
            <th>
                Flight Dep
            </th>
            <th>
                Destination 1
            </th>
            <th>
                Flight Dest1
            </th>
            <th>
                Destination 2
            </th>
            <th>
                Flight Dest2
            </th>

        </tr>
        {results}
            <tr>
                <td>{1d}</td>
                <td>{1f}</td>
                <td>{2d}</td>
                <td>{2f}</td>
                <td>{3d}</td>
                <td>{3f}</td>
            </tr>
        {/results}
    </table>
