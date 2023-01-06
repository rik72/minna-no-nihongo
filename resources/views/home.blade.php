@include('partial/header')

          <x-page-title>こんにちは！</x-page-title>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row starter-main">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h3>What you will find here</h3>
                  </div>
                  <div class="card-body">
                    <p>
                      <strong><a href="https://www.3anet.co.jp/np/en/books/2300/">みんなの日本語</a></strong> is a great book
                      for learning japanese in a classroom setting and under the guide of a teacher.
                      It contains several chapters covering a great quantity of grammar rules with a regular structure,
                      allowing to progress in language skills with quite a quick pace.
                      <br>
                      Each chapter contains all materials for a "lesson":
                      <ul>
                        <li>grammar</li>
                        <li>examples</li>
                        <li>exercises</li>
                      </ul>
                      The grammar pills are quite interesting, being condensed recipes of language knowledge, allowing for the
                      formation of phrases and the grasp of basic mechanics of this fascinating language.
                      <br>
                      <br>
                      This site contains a generator of japanese utterances based on the grammar pills of the various chapters of <strong>みんなの日本語</strong>.
                      <br>
                      <br>
                      <div class="d-flex justify-content-center">
                        <a href="/generator" class="btn btn-lg btn-primary">Generate now</a>
                      </div>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->

@include('partial/footer')
