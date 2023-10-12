BUILD_DIR=./build
gen_build_dir_suffix()
{
    curr_branch=$(git describe --tags)
    if [ -z "$curr_branch" ]; then
        curr_branch=$(git rev-parse --abbrev-ref HEAD)
    fi
    #echo $curr_branch
    curr_sha=$(git log --pretty=format:'%h' -n 1)
    dt=$(date '+%Y-%m-%d')
    #echo $dt
    BLD_DIR_SUFFIX=${dt}_${curr_branch}
    echo $BLD_DIR_SUFFIX
}

log_git_info()
{
    curr_branch=$(git describe --tags --exact-match)
    curr_sha=$(git log --pretty=format:'%h' -n 1)
    ci_date=$(git show -s --format=%ci ${curr_sha} | awk '{ printf $1}')
    echo "git branch    =$curr_branch" >> $PH_DIR/log.txt
    echo "git sha       =$curr_sha" >> $PH_DIR/log.txt
    echo "git sha date  =$ci_date" >> $PH_DIR/log.txt

}
create_build_dir()
{
    cwd=$(pwd)
    BUILD_DIR_NAME=bld_${BLD_DIR_SUFFIX}
    BUILD_DIR=$cwd/../build/$BUILD_DIR_NAME
    PH_DIR_NAME=public_html
	PH_DIR=${BUILD_DIR}/$PH_DIR_NAME
    if [ -d "$BUILD_DIR" ]; then rm -Rf $BUILD_DIR; fi
    mkdir -p $BUILD_DIR
    LOG_DIR=$PH_DIR/log.txt
    #touch $PH_DIR/log.txt

}

zip_build()
{
    #cd $BUILD_DIR
    cp -r ./site $PH_DIR
    #touch $PH_DIR/log.txt
    #ls -al $PH_DIR/log.txt
    log_git_info
    cd ${BUILD_DIR}/..
    tar -zcf ${BUILD_DIR_NAME}.tar.gz ${BUILD_DIR_NAME}
}

gen_build_dir_suffix
create_build_dir

zip_build
