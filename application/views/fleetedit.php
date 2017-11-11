<h1>Fleet ID: {id}</h1>
<form role="form" action="/fleet/submit" method="post">
    {fmanufacturer}
    {fmodel}
    {fseats}
    {freach}
    {fcruise}
    {ftakeoff}
    {fhourly}
    <br/>
    {zsubmit}
    <a href="/fleet/cancel"><input type="button" value="Cancel the current edit"/></a>
    <a href="/fleet/delete"><input type="button" value="Delete this flight"/></a>  
</form>
    {error}