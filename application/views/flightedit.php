<h1>Flight ID: {id}</h1>
<br />
<br />
<br />
<br />
<br />
<form role="form" action="/flights/submit" method="post">
    
    {fdestination}
    {farrivalairport}
    {fdeparteairport}
    {fplaneid}
    {fdeparturetime}
    {farrivaltime}
    <br/>
    {zsubmit}
    <a href="/flights/cancel"><input type="button" value="Cancel the current edit"/></a>
    <a href="/flights/delete"><input type="button" value="Delete this flight"/></a>  
</form>
    {error}