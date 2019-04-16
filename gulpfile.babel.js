import parcel from 'parcel-bundler'
import { series, watch } from 'gulp'
import path from 'path'
import del from 'del'
import browser_sync from 'browser-sync'

process.env.NODE_ENV = 'development'

function set_env(cb) {
  process.env.NODE_ENV = 'production'
  cb()
}

function clear(cb) {
  del(['dist/**', '.cache/**']).then(arr => {
    cb()
  })
}

const entryFiles = path.join(__dirname, './src/scripts/main.js')

function watch_bundle(cb) {
  let bundler = new parcel(entryFiles)

  bundler.on('buildEnd', () => {
    browser_sync.reload()
  })

  bundler.bundle().then(() => {
    browser_sync.init({
      proxy: "olive-branch-consulting.test",
      files: '*.php'
    })
    cb()
  })
}

function bundle(cb) {
  let bundler = new parcel(entryFiles)

  bundler.bundle().then(() => {
    cb()
  })
}

const defaultTask = series(clear, watch_bundle)

const build = series(clear, set_env, bundle)

export { defaultTask as default, clear, build }