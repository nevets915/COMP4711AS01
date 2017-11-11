<h1>Task # {id}</h1>
<form role="form" action="/flights/submit" method="post">
    {fid}
    {farrivalairport}
    <br/>
    {fdeparteairport}
    {fplaneid}
    <br/>
    {fdeparturetime}
    {farrivaltime}
    <br/>
    {zsubmit}
    <a href="/flights/cancel"><input type="button" value="Cancel the current edit"/></a>
    <a href="/flights/delete"><input type="button" value="Delete this flight"/></a>  
</form>
    {error}