<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appDevDebugProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appDevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.controller' => 'getAssetic_ControllerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'assetic.request_listener' => 'getAssetic_RequestListenerService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'bazinga_hateoas.expression_language' => 'getBazingaHateoas_ExpressionLanguageService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'cmf_core.form.type.checkbox_url_label' => 'getCmfCore_Form_Type_CheckboxUrlLabelService',
            'cmf_core.persistence.phpcr.non_translatable_metadata_listener' => 'getCmfCore_Persistence_Phpcr_NonTranslatableMetadataListenerService',
            'cmf_core.publish_workflow.checker' => 'getCmfCore_PublishWorkflow_CheckerService',
            'cmf_core.templating.helper' => 'getCmfCore_Templating_HelperService',
            'cmf_core.twig.children_extension' => 'getCmfCore_Twig_ChildrenExtensionService',
            'cmf_routing.dynamic_router' => 'getCmfRouting_DynamicRouterService',
            'cmf_routing.enhancer.route_content' => 'getCmfRouting_Enhancer_RouteContentService',
            'cmf_routing.final_matcher' => 'getCmfRouting_FinalMatcherService',
            'cmf_routing.generator' => 'getCmfRouting_GeneratorService',
            'cmf_routing.matcher.dummy_collection' => 'getCmfRouting_Matcher_DummyCollectionService',
            'cmf_routing.matcher.dummy_context' => 'getCmfRouting_Matcher_DummyContextService',
            'cmf_routing.nested_matcher' => 'getCmfRouting_NestedMatcherService',
            'cmf_routing.redirect_controller' => 'getCmfRouting_RedirectControllerService',
            'cmf_routing.route_type_form_type' => 'getCmfRouting_RouteTypeFormTypeService',
            'cmf_routing.router' => 'getCmfRouting_RouterService',
            'cmf_sulu_custom_urls.final_matcher' => 'getCmfSuluCustomUrls_FinalMatcherService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'controller_resolver' => 'getControllerResolverService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'data_collector.translation' => 'getDataCollector_TranslationService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.dump_listener' => 'getDebug_DumpListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'doctrine_cache.providers.phpcr_meta' => 'getDoctrineCache_Providers_PhpcrMetaService',
            'doctrine_cache.providers.phpcr_nodes' => 'getDoctrineCache_Providers_PhpcrNodesService',
            'doctrine_phpcr' => 'getDoctrinePhpcrService',
            'doctrine_phpcr.console_dumper' => 'getDoctrinePhpcr_ConsoleDumperService',
            'doctrine_phpcr.default_session' => 'getDoctrinePhpcr_DefaultSessionService',
            'doctrine_phpcr.initializer_manager' => 'getDoctrinePhpcr_InitializerManagerService',
            'doctrine_phpcr.jackalope.repository.default' => 'getDoctrinePhpcr_Jackalope_Repository_DefaultService',
            'doctrine_phpcr.jackalope.repository.factory.doctrinedbal' => 'getDoctrinePhpcr_Jackalope_Repository_Factory_DoctrinedbalService',
            'doctrine_phpcr.jackalope.repository.factory.jackrabbit' => 'getDoctrinePhpcr_Jackalope_Repository_Factory_JackrabbitService',
            'doctrine_phpcr.jackalope.repository.factory.prismic' => 'getDoctrinePhpcr_Jackalope_Repository_Factory_PrismicService',
            'doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal' => 'getDoctrinePhpcr_Jackalope_Repository_Factory_Service_DoctrinedbalService',
            'doctrine_phpcr.jackalope.repository.factory.service.jackrabbit' => 'getDoctrinePhpcr_Jackalope_Repository_Factory_Service_JackrabbitService',
            'doctrine_phpcr.jackalope.repository.factory.service.prismic' => 'getDoctrinePhpcr_Jackalope_Repository_Factory_Service_PrismicService',
            'doctrine_phpcr.jackalope_doctrine_dbal.schema_listener' => 'getDoctrinePhpcr_JackalopeDoctrineDbal_SchemaListenerService',
            'doctrine_phpcr.odm.default_document_manager' => 'getDoctrinePhpcr_Odm_DefaultDocumentManagerService',
            'doctrine_phpcr.odm.form.type.path' => 'getDoctrinePhpcr_Odm_Form_Type_PathService',
            'doctrine_phpcr.odm.validator.valid_phpcr_odm' => 'getDoctrinePhpcr_Odm_Validator_ValidPhpcrOdmService',
            'dtl_content.form.factory.document_type' => 'getDtlContent_Form_Factory_DocumentTypeService',
            'dtl_content.form.type.home' => 'getDtlContent_Form_Type_HomeService',
            'dtl_content.form.type.page' => 'getDtlContent_Form_Type_PageService',
            'dubture_ffmpeg.ffmpeg' => 'getDubtureFfmpeg_FfmpegService',
            'dubture_ffmpeg.ffprobe' => 'getDubtureFfmpeg_FfprobeService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.phpcr.document' => 'getForm_Type_Phpcr_DocumentService',
            'form.type.phpcr.reference' => 'getForm_Type_Phpcr_ReferenceService',
            'form.type.phpcr_odm.reference_collection' => 'getForm_Type_PhpcrOdm_ReferenceCollectionService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.range' => 'getForm_Type_RangeService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.doctrine_phpcr' => 'getForm_TypeGuesser_DoctrinePhpcrService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_rest.body_listener' => 'getFosRest_BodyListenerService',
            'fos_rest.decoder.json' => 'getFosRest_Decoder_JsonService',
            'fos_rest.decoder.jsontoform' => 'getFosRest_Decoder_JsontoformService',
            'fos_rest.decoder.xml' => 'getFosRest_Decoder_XmlService',
            'fos_rest.decoder_provider' => 'getFosRest_DecoderProviderService',
            'fos_rest.exception_format_negotiator' => 'getFosRest_ExceptionFormatNegotiatorService',
            'fos_rest.format_negotiator' => 'getFosRest_FormatNegotiatorService',
            'fos_rest.inflector.doctrine' => 'getFosRest_Inflector_DoctrineService',
            'fos_rest.normalizer.camel_keys' => 'getFosRest_Normalizer_CamelKeysService',
            'fos_rest.normalizer.camel_keys_with_leading_underscore' => 'getFosRest_Normalizer_CamelKeysWithLeadingUnderscoreService',
            'fos_rest.request.param_fetcher' => 'getFosRest_Request_ParamFetcherService',
            'fos_rest.request.param_fetcher.reader' => 'getFosRest_Request_ParamFetcher_ReaderService',
            'fos_rest.routing.loader.controller' => 'getFosRest_Routing_Loader_ControllerService',
            'fos_rest.routing.loader.processor' => 'getFosRest_Routing_Loader_ProcessorService',
            'fos_rest.routing.loader.reader.action' => 'getFosRest_Routing_Loader_Reader_ActionService',
            'fos_rest.routing.loader.reader.controller' => 'getFosRest_Routing_Loader_Reader_ControllerService',
            'fos_rest.routing.loader.xml_collection' => 'getFosRest_Routing_Loader_XmlCollectionService',
            'fos_rest.routing.loader.yaml_collection' => 'getFosRest_Routing_Loader_YamlCollectionService',
            'fos_rest.serializer.exception_wrapper_normalizer' => 'getFosRest_Serializer_ExceptionWrapperNormalizerService',
            'fos_rest.serializer.exception_wrapper_serialize_handler' => 'getFosRest_Serializer_ExceptionWrapperSerializeHandlerService',
            'fos_rest.view.exception_wrapper_handler' => 'getFosRest_View_ExceptionWrapperHandlerService',
            'fos_rest.view_handler' => 'getFosRest_ViewHandlerService',
            'fos_rest.violation_formatter' => 'getFosRest_ViolationFormatterService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'hateoas.configuration.provider.resolver' => 'getHateoas_Configuration_Provider_ResolverService',
            'hateoas.configuration.relations_repository' => 'getHateoas_Configuration_RelationsRepositoryService',
            'hateoas.embeds_factory' => 'getHateoas_EmbedsFactoryService',
            'hateoas.event_subscriber.json' => 'getHateoas_EventSubscriber_JsonService',
            'hateoas.event_subscriber.xml' => 'getHateoas_EventSubscriber_XmlService',
            'hateoas.expression.evaluator' => 'getHateoas_Expression_EvaluatorService',
            'hateoas.generator.registry' => 'getHateoas_Generator_RegistryService',
            'hateoas.generator.symfony' => 'getHateoas_Generator_SymfonyService',
            'hateoas.links_factory' => 'getHateoas_LinksFactoryService',
            'hateoas.serializer.exclusion_manager' => 'getHateoas_Serializer_ExclusionManagerService',
            'http_kernel' => 'getHttpKernelService',
            'jms_serializer' => 'getJmsSerializerService',
            'jms_serializer.array_collection_handler' => 'getJmsSerializer_ArrayCollectionHandlerService',
            'jms_serializer.constraint_violation_handler' => 'getJmsSerializer_ConstraintViolationHandlerService',
            'jms_serializer.datetime_handler' => 'getJmsSerializer_DatetimeHandlerService',
            'jms_serializer.doctrine_proxy_subscriber' => 'getJmsSerializer_DoctrineProxySubscriberService',
            'jms_serializer.form_error_handler' => 'getJmsSerializer_FormErrorHandlerService',
            'jms_serializer.handler_registry' => 'getJmsSerializer_HandlerRegistryService',
            'jms_serializer.json_deserialization_visitor' => 'getJmsSerializer_JsonDeserializationVisitorService',
            'jms_serializer.json_serialization_visitor' => 'getJmsSerializer_JsonSerializationVisitorService',
            'jms_serializer.metadata.file_locator' => 'getJmsSerializer_Metadata_FileLocatorService',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService',
            'jms_serializer.metadata_factory' => 'getJmsSerializer_MetadataFactoryService',
            'jms_serializer.naming_strategy' => 'getJmsSerializer_NamingStrategyService',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService',
            'jms_serializer.php_collection_handler' => 'getJmsSerializer_PhpCollectionHandlerService',
            'jms_serializer.stopwatch_subscriber' => 'getJmsSerializer_StopwatchSubscriberService',
            'jms_serializer.templating.helper.serializer' => 'getJmsSerializer_Templating_Helper_SerializerService',
            'jms_serializer.unserialize_object_constructor' => 'getJmsSerializer_UnserializeObjectConstructorService',
            'jms_serializer.xml_deserialization_visitor' => 'getJmsSerializer_XmlDeserializationVisitorService',
            'jms_serializer.xml_serialization_visitor' => 'getJmsSerializer_XmlSerializationVisitorService',
            'jms_serializer.yaml_serialization_visitor' => 'getJmsSerializer_YamlSerializationVisitorService',
            'kernel' => 'getKernelService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'liip_theme.active_theme' => 'getLiipTheme_ActiveThemeService',
            'liip_theme.theme_auto_detect' => 'getLiipTheme_ThemeAutoDetectService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'massive_build.build.registry' => 'getMassiveBuild_Build_RegistryService',
            'massive_build.command.build' => 'getMassiveBuild_Command_BuildService',
            'massive_search.adapter.test' => 'getMassiveSearch_Adapter_TestService',
            'massive_search.adapter.zend_lucene' => 'getMassiveSearch_Adapter_ZendLuceneService',
            'massive_search.command.index_rebuild_deprecated' => 'getMassiveSearch_Command_IndexRebuildDeprecatedService',
            'massive_search.command.init' => 'getMassiveSearch_Command_InitService',
            'massive_search.command.purge' => 'getMassiveSearch_Command_PurgeService',
            'massive_search.command.query' => 'getMassiveSearch_Command_QueryService',
            'massive_search.command.reindex' => 'getMassiveSearch_Command_ReindexService',
            'massive_search.command.status' => 'getMassiveSearch_Command_StatusService',
            'massive_search.converter' => 'getMassiveSearch_ConverterService',
            'massive_search.converter.date_converter' => 'getMassiveSearch_Converter_DateConverterService',
            'massive_search.events.deindex_listener' => 'getMassiveSearch_Events_DeindexListenerService',
            'massive_search.events.index_listener' => 'getMassiveSearch_Events_IndexListenerService',
            'massive_search.events.zend_rebuild' => 'getMassiveSearch_Events_ZendRebuildService',
            'massive_search.expression_language' => 'getMassiveSearch_ExpressionLanguageService',
            'massive_search.factory_default' => 'getMassiveSearch_FactoryDefaultService',
            'massive_search.index_name_decorator' => 'getMassiveSearch_IndexNameDecoratorService',
            'massive_search.localization_decorator' => 'getMassiveSearch_LocalizationDecoratorService',
            'massive_search.metadata.cache.file_cache' => 'getMassiveSearch_Metadata_Cache_FileCacheService',
            'massive_search.metadata.driver.chain' => 'getMassiveSearch_Metadata_Driver_ChainService',
            'massive_search.metadata.driver.xml' => 'getMassiveSearch_Metadata_Driver_XmlService',
            'massive_search.metadata.factory' => 'getMassiveSearch_Metadata_FactoryService',
            'massive_search.metadata.field_evaluator' => 'getMassiveSearch_Metadata_FieldEvaluatorService',
            'massive_search.metadata.file_locator' => 'getMassiveSearch_Metadata_FileLocatorService',
            'massive_search.metadata.provider.chain' => 'getMassiveSearch_Metadata_Provider_ChainService',
            'massive_search.metadata.provider.default' => 'getMassiveSearch_Metadata_Provider_DefaultService',
            'massive_search.object_to_document_converter' => 'getMassiveSearch_ObjectToDocumentConverterService',
            'massive_search.prefix_decorator' => 'getMassiveSearch_PrefixDecoratorService',
            'massive_search.reindex.provider.doctrine_orm' => 'getMassiveSearch_Reindex_Provider_DoctrineOrmService',
            'massive_search.reindex.provider_registry' => 'getMassiveSearch_Reindex_ProviderRegistryService',
            'massive_search.reindex.resume_manager' => 'getMassiveSearch_Reindex_ResumeManagerService',
            'massive_search.search.event_subscriber.doctrine_orm' => 'getMassiveSearch_Search_EventSubscriber_DoctrineOrmService',
            'massive_search.search.event_subscriber.purge_subscriber' => 'getMassiveSearch_Search_EventSubscriber_PurgeSubscriberService',
            'massive_search.search_manager' => 'getMassiveSearch_SearchManagerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.console_very_verbose' => 'getMonolog_Handler_ConsoleVeryVerboseService',
            'monolog.handler.debug' => 'getMonolog_Handler_DebugService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.logger.assetic' => 'getMonolog_Logger_AsseticService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.doctrine_phpcr' => 'getMonolog_Logger_DoctrinePhpcrService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.sulu_document_manager' => 'getMonolog_Logger_SuluDocumentManagerService',
            'monolog.logger.sululocation_geolocator' => 'getMonolog_Logger_SululocationGeolocatorService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'phpcr_migrations.command.initialize' => 'getPhpcrMigrations_Command_InitializeService',
            'phpcr_migrations.command.migrate' => 'getPhpcrMigrations_Command_MigrateService',
            'phpcr_migrations.command.status' => 'getPhpcrMigrations_Command_StatusService',
            'phpcr_migrations.migrator_factory' => 'getPhpcrMigrations_MigratorFactoryService',
            'phpcr_migrations.version_finder' => 'getPhpcrMigrations_VersionFinderService',
            'phpcr_migrations.version_storage' => 'getPhpcrMigrations_VersionStorageService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router.request_context' => 'getRouter_RequestContextService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'stof_doctrine_extensions.uploadable.manager' => 'getStofDoctrineExtensions_Uploadable_ManagerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'sulu.cache.warmer.structure' => 'getSulu_Cache_Warmer_StructureService',
            'sulu.content.localization_finder' => 'getSulu_Content_LocalizationFinderService',
            'sulu.content.mapper' => 'getSulu_Content_MapperService',
            'sulu.content.path_cleaner' => 'getSulu_Content_PathCleanerService',
            'sulu.content.path_cleaner.replacer_loader' => 'getSulu_Content_PathCleaner_ReplacerLoaderService',
            'sulu.content.path_cleaner.replacer_loader.file_locator' => 'getSulu_Content_PathCleaner_ReplacerLoader_FileLocatorService',
            'sulu.content.query_executor' => 'getSulu_Content_QueryExecutorService',
            'sulu.content.rlp.strategy.tree' => 'getSulu_Content_Rlp_Strategy_TreeService',
            'sulu.content.structure_manager' => 'getSulu_Content_StructureManagerService',
            'sulu.content.type.block' => 'getSulu_Content_Type_BlockService',
            'sulu.content.type.checkbox' => 'getSulu_Content_Type_CheckboxService',
            'sulu.content.type.color' => 'getSulu_Content_Type_ColorService',
            'sulu.content.type.date' => 'getSulu_Content_Type_DateService',
            'sulu.content.type.email' => 'getSulu_Content_Type_EmailService',
            'sulu.content.type.internal_links' => 'getSulu_Content_Type_InternalLinksService',
            'sulu.content.type.multiple_select' => 'getSulu_Content_Type_MultipleSelectService',
            'sulu.content.type.password' => 'getSulu_Content_Type_PasswordService',
            'sulu.content.type.phone' => 'getSulu_Content_Type_PhoneService',
            'sulu.content.type.resource_locator' => 'getSulu_Content_Type_ResourceLocatorService',
            'sulu.content.type.single_internal_link' => 'getSulu_Content_Type_SingleInternalLinkService',
            'sulu.content.type.single_select' => 'getSulu_Content_Type_SingleSelectService',
            'sulu.content.type.text_area' => 'getSulu_Content_Type_TextAreaService',
            'sulu.content.type.text_editor' => 'getSulu_Content_Type_TextEditorService',
            'sulu.content.type.text_line' => 'getSulu_Content_Type_TextLineService',
            'sulu.content.type.time' => 'getSulu_Content_Type_TimeService',
            'sulu.content.type.url' => 'getSulu_Content_Type_UrlService',
            'sulu.content.type_manager' => 'getSulu_Content_TypeManagerService',
            'sulu.content.webspace_structure_provider' => 'getSulu_Content_WebspaceStructureProviderService',
            'sulu.content.webspace_structure_provider.cache' => 'getSulu_Content_WebspaceStructureProvider_CacheService',
            'sulu.core.localization_manager' => 'getSulu_Core_LocalizationManagerService',
            'sulu.core.localization_manager.core_provider' => 'getSulu_Core_LocalizationManager_CoreProviderService',
            'sulu.persistence.event_subscriber.orm.metadata' => 'getSulu_Persistence_EventSubscriber_Orm_MetadataService',
            'sulu.persistence.event_subscriber.orm.timestampable' => 'getSulu_Persistence_EventSubscriber_Orm_TimestampableService',
            'sulu.persistence.event_subscriber.orm.user_blame' => 'getSulu_Persistence_EventSubscriber_Orm_UserBlameService',
            'sulu.phpcr.session' => 'getSulu_Phpcr_SessionService',
            'sulu.repository.access_control' => 'getSulu_Repository_AccessControlService',
            'sulu.repository.contact' => 'getSulu_Repository_ContactService',
            'sulu.repository.role' => 'getSulu_Repository_RoleService',
            'sulu.repository.user' => 'getSulu_Repository_UserService',
            'sulu.translate.build.builder.translation' => 'getSulu_Translate_Build_Builder_TranslationService',
            'sulu.util.node_helper' => 'getSulu_Util_NodeHelperService',
            'sulu_category.category_manager' => 'getSuluCategory_CategoryManagerService',
            'sulu_category.category_repository' => 'getSuluCategory_CategoryRepositoryService',
            'sulu_category.category_request_handler' => 'getSuluCategory_CategoryRequestHandlerService',
            'sulu_category.content.type.category_list' => 'getSuluCategory_Content_Type_CategoryListService',
            'sulu_category.keyword_manager' => 'getSuluCategory_KeywordManagerService',
            'sulu_category.keyword_repository' => 'getSuluCategory_KeywordRepositoryService',
            'sulu_category.twig_extension' => 'getSuluCategory_TwigExtensionService',
            'sulu_contact.account_factory' => 'getSuluContact_AccountFactoryService',
            'sulu_contact.account_listener' => 'getSuluContact_AccountListenerService',
            'sulu_contact.account_manager' => 'getSuluContact_AccountManagerService',
            'sulu_contact.account_repository' => 'getSuluContact_AccountRepositoryService',
            'sulu_contact.contact_manager' => 'getSuluContact_ContactManagerService',
            'sulu_contact.contact_repository' => 'getSuluContact_ContactRepositoryService',
            'sulu_contact.contact_title_repository' => 'getSuluContact_ContactTitleRepositoryService',
            'sulu_contact.content.contact' => 'getSuluContact_Content_ContactService',
            'sulu_contact.country_repository' => 'getSuluContact_CountryRepositoryService',
            'sulu_contact.customer_manager' => 'getSuluContact_CustomerManagerService',
            'sulu_contact.js_config' => 'getSuluContact_JsConfigService',
            'sulu_contact.smart_content.data_provider.account' => 'getSuluContact_SmartContent_DataProvider_AccountService',
            'sulu_contact.smart_content.data_provider.contact' => 'getSuluContact_SmartContent_DataProvider_ContactService',
            'sulu_contact.twig' => 'getSuluContact_TwigService',
            'sulu_contact.twig.cache' => 'getSuluContact_Twig_CacheService',
            'sulu_contact.util.id_converter' => 'getSuluContact_Util_IdConverterService',
            'sulu_contact.util.index_comparator' => 'getSuluContact_Util_IndexComparatorService',
            'sulu_content.compat.serializer.handler.page_bridge' => 'getSuluContent_Compat_Serializer_Handler_PageBridgeService',
            'sulu_content.compat.structure.legacy_property_factory' => 'getSuluContent_Compat_Structure_LegacyPropertyFactoryService',
            'sulu_content.content_repository' => 'getSuluContent_ContentRepositoryService',
            'sulu_content.document.serializer.handler.extension_container' => 'getSuluContent_Document_Serializer_Handler_ExtensionContainerService',
            'sulu_content.document.serializer.handler.structure' => 'getSuluContent_Document_Serializer_Handler_StructureService',
            'sulu_content.document.serializer.subscriber.extension_container' => 'getSuluContent_Document_Serializer_Subscriber_ExtensionContainerService',
            'sulu_content.document.serializer.subscriber.locale' => 'getSuluContent_Document_Serializer_Subscriber_LocaleService',
            'sulu_content.document.serializer.subscriber.path_behavior' => 'getSuluContent_Document_Serializer_Subscriber_PathBehaviorService',
            'sulu_content.document.serializer.subscriber.redirect_type_behavior' => 'getSuluContent_Document_Serializer_Subscriber_RedirectTypeBehaviorService',
            'sulu_content.document.serializer.subscriber.shadow_locale_behavior' => 'getSuluContent_Document_Serializer_Subscriber_ShadowLocaleBehaviorService',
            'sulu_content.document.serializer.subscriber.structure_behavior' => 'getSuluContent_Document_Serializer_Subscriber_StructureBehaviorService',
            'sulu_content.document.serializer.subscriber.workflow_stage_behavior' => 'getSuluContent_Document_Serializer_Subscriber_WorkflowStageBehaviorService',
            'sulu_content.document.subscriber.content' => 'getSuluContent_Document_Subscriber_ContentService',
            'sulu_content.document_manager.content_initializer' => 'getSuluContent_DocumentManager_ContentInitializerService',
            'sulu_content.extension.excerpt' => 'getSuluContent_Extension_ExcerptService',
            'sulu_content.extension.manager' => 'getSuluContent_Extension_ManagerService',
            'sulu_content.extension.seo' => 'getSuluContent_Extension_SeoService',
            'sulu_content.jsconfig' => 'getSuluContent_JsconfigService',
            'sulu_content.jsconfig.apps' => 'getSuluContent_Jsconfig_AppsService',
            'sulu_content.jsconfig.preview' => 'getSuluContent_Jsconfig_PreviewService',
            'sulu_content.jsconfig.server' => 'getSuluContent_Jsconfig_ServerService',
            'sulu_content.node_repository' => 'getSuluContent_NodeRepositoryService',
            'sulu_content.permission_listener' => 'getSuluContent_PermissionListenerService',
            'sulu_content.preview' => 'getSuluContent_PreviewService',
            'sulu_content.preview.cache_provider.changes_cache' => 'getSuluContent_Preview_CacheProvider_ChangesCacheService',
            'sulu_content.preview.cache_provider.data_cache' => 'getSuluContent_Preview_CacheProvider_DataCacheService',
            'sulu_content.preview.exception_listener' => 'getSuluContent_Preview_ExceptionListenerService',
            'sulu_content.preview.message_component' => 'getSuluContent_Preview_MessageComponentService',
            'sulu_content.rl_repository' => 'getSuluContent_RlRepositoryService',
            'sulu_content.search.event_subscriber.blame_timestamp' => 'getSuluContent_Search_EventSubscriber_BlameTimestampService',
            'sulu_content.search.event_subscriber.structure' => 'getSuluContent_Search_EventSubscriber_StructureService',
            'sulu_content.search.metadata.provider.structure' => 'getSuluContent_Search_Metadata_Provider_StructureService',
            'sulu_content.search.reindex.structure_provider' => 'getSuluContent_Search_Reindex_StructureProviderService',
            'sulu_content.smart_content.content_type' => 'getSuluContent_SmartContent_ContentTypeService',
            'sulu_content.smart_content.data_provider.content' => 'getSuluContent_SmartContent_DataProvider_ContentService',
            'sulu_content.smart_content.data_provider.content.proxy_factory' => 'getSuluContent_SmartContent_DataProvider_Content_ProxyFactoryService',
            'sulu_content.smart_content.data_provider.content.query_builder' => 'getSuluContent_SmartContent_DataProvider_Content_QueryBuilderService',
            'sulu_content.smart_content.data_provider_pool' => 'getSuluContent_SmartContent_DataProviderPoolService',
            'sulu_content.structure.factory' => 'getSuluContent_Structure_FactoryService',
            'sulu_content.twig_extension' => 'getSuluContent_TwigExtensionService',
            'sulu_core.array_serialization_visitor' => 'getSuluCore_ArraySerializationVisitorService',
            'sulu_core.build.builder.database' => 'getSuluCore_Build_Builder_DatabaseService',
            'sulu_core.build.builder.fixtures' => 'getSuluCore_Build_Builder_FixturesService',
            'sulu_core.build.builder.node_order' => 'getSuluCore_Build_Builder_NodeOrderService',
            'sulu_core.build.builder.phpcr' => 'getSuluCore_Build_Builder_PhpcrService',
            'sulu_core.build.builder.phpcr_migrations' => 'getSuluCore_Build_Builder_PhpcrMigrationsService',
            'sulu_core.cache.memoize' => 'getSuluCore_Cache_MemoizeService',
            'sulu_core.cache.memoize.cache' => 'getSuluCore_Cache_Memoize_CacheService',
            'sulu_core.doctrine_list_builder_factory' => 'getSuluCore_DoctrineListBuilderFactoryService',
            'sulu_core.doctrine_rest_helper' => 'getSuluCore_DoctrineRestHelperService',
            'sulu_core.list_builder.field_descriptor_factory' => 'getSuluCore_ListBuilder_FieldDescriptorFactoryService',
            'sulu_core.list_builder.metadata.file_locator' => 'getSuluCore_ListBuilder_Metadata_FileLocatorService',
            'sulu_core.list_builder.metadata.parameter_bag' => 'getSuluCore_ListBuilder_Metadata_ParameterBagService',
            'sulu_core.list_builder.metadata.provider.chain' => 'getSuluCore_ListBuilder_Metadata_Provider_ChainService',
            'sulu_core.list_builder.metadata.provider.doctrine' => 'getSuluCore_ListBuilder_Metadata_Provider_DoctrineService',
            'sulu_core.list_builder.metadata.provider.doctrine.cache' => 'getSuluCore_ListBuilder_Metadata_Provider_Doctrine_CacheService',
            'sulu_core.list_builder.metadata.provider.doctrine.driver.xml' => 'getSuluCore_ListBuilder_Metadata_Provider_Doctrine_Driver_XmlService',
            'sulu_core.list_builder.metadata.provider.doctrine.factory' => 'getSuluCore_ListBuilder_Metadata_Provider_Doctrine_FactoryService',
            'sulu_core.list_builder.metadata.provider.general' => 'getSuluCore_ListBuilder_Metadata_Provider_GeneralService',
            'sulu_core.list_builder.metadata.provider.general.cache' => 'getSuluCore_ListBuilder_Metadata_Provider_General_CacheService',
            'sulu_core.list_builder.metadata.provider.general.driver.xml' => 'getSuluCore_ListBuilder_Metadata_Provider_General_Driver_XmlService',
            'sulu_core.list_builder.metadata.provider.general.event_subscriber' => 'getSuluCore_ListBuilder_Metadata_Provider_General_EventSubscriberService',
            'sulu_core.list_builder.metadata.provider.general.factory' => 'getSuluCore_ListBuilder_Metadata_Provider_General_FactoryService',
            'sulu_core.list_rest_helper' => 'getSuluCore_ListRestHelperService',
            'sulu_core.request_processor.website' => 'getSuluCore_RequestProcessor_WebsiteService',
            'sulu_core.rest.datetime_handler' => 'getSuluCore_Rest_DatetimeHandlerService',
            'sulu_core.rest.exception_wrapper_handler' => 'getSuluCore_Rest_ExceptionWrapperHandlerService',
            'sulu_core.rest.view_handler.csv' => 'getSuluCore_Rest_ViewHandler_CsvService',
            'sulu_core.rest_helper' => 'getSuluCore_RestHelperService',
            'sulu_core.webspace.document_manager.webspace_initializer' => 'getSuluCore_Webspace_DocumentManager_WebspaceInitializerService',
            'sulu_core.webspace.loader.xml' => 'getSuluCore_Webspace_Loader_XmlService',
            'sulu_core.webspace.request_analyzer' => 'getSuluCore_Webspace_RequestAnalyzerService',
            'sulu_core.webspace.settings_manager' => 'getSuluCore_Webspace_SettingsManagerService',
            'sulu_core.webspace.url_provider' => 'getSuluCore_Webspace_UrlProviderService',
            'sulu_core.webspace.url_provider.default' => 'getSuluCore_Webspace_UrlProvider_DefaultService',
            'sulu_core.webspace.webspace_manager' => 'getSuluCore_Webspace_WebspaceManagerService',
            'sulu_core.webspace.webspace_manager.url_replacer' => 'getSuluCore_Webspace_WebspaceManager_UrlReplacerService',
            'sulu_custom_urls.domain_generator' => 'getSuluCustomUrls_DomainGeneratorService',
            'sulu_custom_urls.initializer' => 'getSuluCustomUrls_InitializerService',
            'sulu_custom_urls.invalidate.subscriber' => 'getSuluCustomUrls_Invalidate_SubscriberService',
            'sulu_custom_urls.manager' => 'getSuluCustomUrls_ManagerService',
            'sulu_custom_urls.repository' => 'getSuluCustomUrls_RepositoryService',
            'sulu_custom_urls.request_processor' => 'getSuluCustomUrls_RequestProcessorService',
            'sulu_custom_urls.routing.generator' => 'getSuluCustomUrls_Routing_GeneratorService',
            'sulu_custom_urls.routing.nested_matcher' => 'getSuluCustomUrls_Routing_NestedMatcherService',
            'sulu_custom_urls.routing.provider' => 'getSuluCustomUrls_Routing_ProviderService',
            'sulu_custom_urls.routing.route_enhancers.content' => 'getSuluCustomUrls_Routing_RouteEnhancers_ContentService',
            'sulu_custom_urls.routing.route_enhancers.external_link' => 'getSuluCustomUrls_Routing_RouteEnhancers_ExternalLinkService',
            'sulu_custom_urls.routing.route_enhancers.internal_link' => 'getSuluCustomUrls_Routing_RouteEnhancers_InternalLinkService',
            'sulu_custom_urls.routing.route_enhancers.redirect' => 'getSuluCustomUrls_Routing_RouteEnhancers_RedirectService',
            'sulu_custom_urls.routing.route_enhancers.seo' => 'getSuluCustomUrls_Routing_RouteEnhancers_SeoService',
            'sulu_custom_urls.routing.route_enhancers.structure' => 'getSuluCustomUrls_Routing_RouteEnhancers_StructureService',
            'sulu_custom_urls.routing.route_enhancers.trailing_html' => 'getSuluCustomUrls_Routing_RouteEnhancers_TrailingHtmlService',
            'sulu_custom_urls.routing.route_enhancers.trailing_slash' => 'getSuluCustomUrls_Routing_RouteEnhancers_TrailingSlashService',
            'sulu_custom_urls.routing.router' => 'getSuluCustomUrls_Routing_RouterService',
            'sulu_custom_urls.subscriber' => 'getSuluCustomUrls_SubscriberService',
            'sulu_custom_urls.url_provider' => 'getSuluCustomUrls_UrlProviderService',
            'sulu_document_manager.command.fixtures_load' => 'getSuluDocumentManager_Command_FixturesLoadService',
            'sulu_document_manager.command.initialize' => 'getSuluDocumentManager_Command_InitializeService',
            'sulu_document_manager.data_fixtures.executor' => 'getSuluDocumentManager_DataFixtures_ExecutorService',
            'sulu_document_manager.data_fixtures.loader' => 'getSuluDocumentManager_DataFixtures_LoaderService',
            'sulu_document_manager.document.subscriber.compat.content_mapper' => 'getSuluDocumentManager_Document_Subscriber_Compat_ContentMapperService',
            'sulu_document_manager.document.subscriber.extension' => 'getSuluDocumentManager_Document_Subscriber_ExtensionService',
            'sulu_document_manager.document.subscriber.fallback_localization' => 'getSuluDocumentManager_Document_Subscriber_FallbackLocalizationService',
            'sulu_document_manager.document.subscriber.order' => 'getSuluDocumentManager_Document_Subscriber_OrderService',
            'sulu_document_manager.document.subscriber.robot' => 'getSuluDocumentManager_Document_Subscriber_RobotService',
            'sulu_document_manager.document.subscriber.route' => 'getSuluDocumentManager_Document_Subscriber_RouteService',
            'sulu_document_manager.document.subscriber.security' => 'getSuluDocumentManager_Document_Subscriber_SecurityService',
            'sulu_document_manager.document.subscriber.shadow_copy_properties' => 'getSuluDocumentManager_Document_Subscriber_ShadowCopyPropertiesService',
            'sulu_document_manager.document.subscriber.shadow_locale' => 'getSuluDocumentManager_Document_Subscriber_ShadowLocaleService',
            'sulu_document_manager.document.subscriber.target' => 'getSuluDocumentManager_Document_Subscriber_TargetService',
            'sulu_document_manager.document.subscriber.title' => 'getSuluDocumentManager_Document_Subscriber_TitleService',
            'sulu_document_manager.document.subscriber.webspace' => 'getSuluDocumentManager_Document_Subscriber_WebspaceService',
            'sulu_document_manager.document.subscriber.workflow_stage' => 'getSuluDocumentManager_Document_Subscriber_WorkflowStageService',
            'sulu_document_manager.document_inspector' => 'getSuluDocumentManager_DocumentInspectorService',
            'sulu_document_manager.document_manager' => 'getSuluDocumentManager_DocumentManagerService',
            'sulu_document_manager.document_registry' => 'getSuluDocumentManager_DocumentRegistryService',
            'sulu_document_manager.document_strategy' => 'getSuluDocumentManager_DocumentStrategyService',
            'sulu_document_manager.event_dispatcher' => 'getSuluDocumentManager_EventDispatcherService',
            'sulu_document_manager.initializer' => 'getSuluDocumentManager_InitializerService',
            'sulu_document_manager.initializer.root_path_purger' => 'getSuluDocumentManager_Initializer_RootPathPurgerService',
            'sulu_document_manager.initializer.workspace' => 'getSuluDocumentManager_Initializer_WorkspaceService',
            'sulu_document_manager.metadata_factory' => 'getSuluDocumentManager_MetadataFactoryService',
            'sulu_document_manager.metadata_factory.base' => 'getSuluDocumentManager_MetadataFactory_BaseService',
            'sulu_document_manager.namespace_registry' => 'getSuluDocumentManager_NamespaceRegistryService',
            'sulu_document_manager.node_manager' => 'getSuluDocumentManager_NodeManagerService',
            'sulu_document_manager.path_builder' => 'getSuluDocumentManager_PathBuilderService',
            'sulu_document_manager.path_segment_registry' => 'getSuluDocumentManager_PathSegmentRegistryService',
            'sulu_document_manager.property_encoder' => 'getSuluDocumentManager_PropertyEncoderService',
            'sulu_document_manager.proxy_factory' => 'getSuluDocumentManager_ProxyFactoryService',
            'sulu_document_manager.proxy_manager.cache_warmer' => 'getSuluDocumentManager_ProxyManager_CacheWarmerService',
            'sulu_document_manager.proxy_manager.configuration' => 'getSuluDocumentManager_ProxyManager_ConfigurationService',
            'sulu_document_manager.proxy_manager.factory.ghost' => 'getSuluDocumentManager_ProxyManager_Factory_GhostService',
            'sulu_document_manager.serializer.handler.children_collection' => 'getSuluDocumentManager_Serializer_Handler_ChildrenCollectionService',
            'sulu_document_manager.serializer.subscriber.children_behavior' => 'getSuluDocumentManager_Serializer_Subscriber_ChildrenBehaviorService',
            'sulu_document_manager.serializer.subscriber.document' => 'getSuluDocumentManager_Serializer_Subscriber_DocumentService',
            'sulu_document_manager.serializer.subscriber.proxy' => 'getSuluDocumentManager_Serializer_Subscriber_ProxyService',
            'sulu_document_manager.subscriber.behavior.alias' => 'getSuluDocumentManager_Subscriber_Behavior_AliasService',
            'sulu_document_manager.subscriber.behavior.auto_name' => 'getSuluDocumentManager_Subscriber_Behavior_AutoNameService',
            'sulu_document_manager.subscriber.behavior.base_path' => 'getSuluDocumentManager_Subscriber_Behavior_BasePathService',
            'sulu_document_manager.subscriber.behavior.filing' => 'getSuluDocumentManager_Subscriber_Behavior_FilingService',
            'sulu_document_manager.subscriber.behavior.path' => 'getSuluDocumentManager_Subscriber_Behavior_PathService',
            'sulu_document_manager.subscriber.behavior.path.explicit' => 'getSuluDocumentManager_Subscriber_Behavior_Path_ExplicitService',
            'sulu_document_manager.subscriber.behavior.remove_content' => 'getSuluDocumentManager_Subscriber_Behavior_RemoveContentService',
            'sulu_document_manager.subscriber.core.instantiator' => 'getSuluDocumentManager_Subscriber_Core_InstantiatorService',
            'sulu_document_manager.subscriber.core.mapping' => 'getSuluDocumentManager_Subscriber_Core_MappingService',
            'sulu_document_manager.subscriber.core.registrator' => 'getSuluDocumentManager_Subscriber_Core_RegistratorService',
            'sulu_document_manager.subscriber.phpcr.find' => 'getSuluDocumentManager_Subscriber_Phpcr_FindService',
            'sulu_document_manager.subscriber.phpcr.general' => 'getSuluDocumentManager_Subscriber_Phpcr_GeneralService',
            'sulu_document_manager.subscriber.phpcr.query' => 'getSuluDocumentManager_Subscriber_Phpcr_QueryService',
            'sulu_document_manager.subscriber.phpcr.remove' => 'getSuluDocumentManager_Subscriber_Phpcr_RemoveService',
            'sulu_document_manager.subscriber.phpcr.reorder' => 'getSuluDocumentManager_Subscriber_Phpcr_ReorderService',
            'sulu_document_manager.suscriber.behavior.blame' => 'getSuluDocumentManager_Suscriber_Behavior_BlameService',
            'sulu_document_manager.suscriber.behavior.children' => 'getSuluDocumentManager_Suscriber_Behavior_ChildrenService',
            'sulu_document_manager.suscriber.behavior.locale' => 'getSuluDocumentManager_Suscriber_Behavior_LocaleService',
            'sulu_document_manager.suscriber.behavior.node_name' => 'getSuluDocumentManager_Suscriber_Behavior_NodeNameService',
            'sulu_document_manager.suscriber.behavior.parent' => 'getSuluDocumentManager_Suscriber_Behavior_ParentService',
            'sulu_document_manager.suscriber.behavior.timestamp' => 'getSuluDocumentManager_Suscriber_Behavior_TimestampService',
            'sulu_document_manager.suscriber.behavior.uuid' => 'getSuluDocumentManager_Suscriber_Behavior_UuidService',
            'sulu_hash.auditable_hasher' => 'getSuluHash_AuditableHasherService',
            'sulu_hash.event_subscriber.serializer' => 'getSuluHash_EventSubscriber_SerializerService',
            'sulu_hash.request_hash_checker' => 'getSuluHash_RequestHashCheckerService',
            'sulu_http_cache.event_subscriber.content_mapper' => 'getSuluHttpCache_EventSubscriber_ContentMapperService',
            'sulu_http_cache.event_subscriber.flush' => 'getSuluHttpCache_EventSubscriber_FlushService',
            'sulu_http_cache.event_subscriber.update_response' => 'getSuluHttpCache_EventSubscriber_UpdateResponseService',
            'sulu_http_cache.handler.aggregate' => 'getSuluHttpCache_Handler_AggregateService',
            'sulu_http_cache.handler.debug' => 'getSuluHttpCache_Handler_DebugService',
            'sulu_http_cache.handler.paths' => 'getSuluHttpCache_Handler_PathsService',
            'sulu_http_cache.handler.public' => 'getSuluHttpCache_Handler_PublicService',
            'sulu_http_cache.proxy_client.symfony' => 'getSuluHttpCache_ProxyClient_SymfonyService',
            'sulu_http_cache.proxy_client.varnish' => 'getSuluHttpCache_ProxyClient_VarnishService',
            'sulu_location.content.type.location' => 'getSuluLocation_Content_Type_LocationService',
            'sulu_location.gelocator.service.nominatim' => 'getSuluLocation_Gelocator_Service_NominatimService',
            'sulu_location.geolocator.guzzle.client' => 'getSuluLocation_Geolocator_Guzzle_ClientService',
            'sulu_location.geolocator.guzzle.log_adapter' => 'getSuluLocation_Geolocator_Guzzle_LogAdapterService',
            'sulu_location.geolocator.guzzle.log_subscriber' => 'getSuluLocation_Geolocator_Guzzle_LogSubscriberService',
            'sulu_location.geolocator.manager' => 'getSuluLocation_Geolocator_ManagerService',
            'sulu_location.geolocator.service.google' => 'getSuluLocation_Geolocator_Service_GoogleService',
            'sulu_location.map_manager' => 'getSuluLocation_MapManagerService',
            'sulu_media.collection_manager' => 'getSuluMedia_CollectionManagerService',
            'sulu_media.collection_repository' => 'getSuluMedia_CollectionRepositoryService',
            'sulu_media.file_validator' => 'getSuluMedia_FileValidatorService',
            'sulu_media.file_version_meta_repository' => 'getSuluMedia_FileVersionMetaRepositoryService',
            'sulu_media.format_cache' => 'getSuluMedia_FormatCacheService',
            'sulu_media.format_cache_clearer' => 'getSuluMedia_FormatCacheClearerService',
            'sulu_media.format_manager' => 'getSuluMedia_FormatManagerService',
            'sulu_media.image.command.crop' => 'getSuluMedia_Image_Command_CropService',
            'sulu_media.image.command.resize' => 'getSuluMedia_Image_Command_ResizeService',
            'sulu_media.image.command.scale' => 'getSuluMedia_Image_Command_ScaleService',
            'sulu_media.image.command_manager' => 'getSuluMedia_Image_CommandManagerService',
            'sulu_media.image.converter' => 'getSuluMedia_Image_ConverterService',
            'sulu_media.media_manager' => 'getSuluMedia_MediaManagerService',
            'sulu_media.media_repository' => 'getSuluMedia_MediaRepositoryService',
            'sulu_media.permission_listener' => 'getSuluMedia_PermissionListenerService',
            'sulu_media.search.subscriber.media' => 'getSuluMedia_Search_Subscriber_MediaService',
            'sulu_media.search.subscriber.structure_media' => 'getSuluMedia_Search_Subscriber_StructureMediaService',
            'sulu_media.security_context' => 'getSuluMedia_SecurityContextService',
            'sulu_media.smart_content.data_provider.media' => 'getSuluMedia_SmartContent_DataProvider_MediaService',
            'sulu_media.smart_content.data_provider.media.repository' => 'getSuluMedia_SmartContent_DataProvider_Media_RepositoryService',
            'sulu_media.storage' => 'getSuluMedia_StorageService',
            'sulu_media.storage.file_system' => 'getSuluMedia_Storage_FileSystemService',
            'sulu_media.system_collections.builder' => 'getSuluMedia_SystemCollections_BuilderService',
            'sulu_media.system_collections.cache' => 'getSuluMedia_SystemCollections_CacheService',
            'sulu_media.system_collections.manager' => 'getSuluMedia_SystemCollections_ManagerService',
            'sulu_media.twig_extension.disposition_type' => 'getSuluMedia_TwigExtension_DispositionTypeService',
            'sulu_media.twig_extension.media' => 'getSuluMedia_TwigExtension_MediaService',
            'sulu_media.type.media_selection' => 'getSuluMedia_Type_MediaSelectionService',
            'sulu_media.type_manager' => 'getSuluMedia_TypeManagerService',
            'sulu_media.video_thumbnail_generator' => 'getSuluMedia_VideoThumbnailGeneratorService',
            'sulu_navigationcontext.document.subscriber.navigation_context' => 'getSuluNavigationcontext_Document_Subscriber_NavigationContextService',
            'sulu_redirect_type.document.subscriber.redirect_type' => 'getSuluRedirectType_Document_Subscriber_RedirectTypeService',
            'sulu_resource_segment.document.subscriber.resource_segment' => 'getSuluResourceSegment_Document_Subscriber_ResourceSegmentService',
            'sulu_search.build.index' => 'getSuluSearch_Build_IndexService',
            'sulu_search.event_listener.hit' => 'getSuluSearch_EventListener_HitService',
            'sulu_search.index_configuration_provider' => 'getSuluSearch_IndexConfigurationProviderService',
            'sulu_search.search.factory' => 'getSuluSearch_Search_FactoryService',
            'sulu_security.access_control_manager' => 'getSuluSecurity_AccessControlManagerService',
            'sulu_security.authentication_entry_point' => 'getSuluSecurity_AuthenticationEntryPointService',
            'sulu_security.authentication_handler' => 'getSuluSecurity_AuthenticationHandlerService',
            'sulu_security.build.user' => 'getSuluSecurity_Build_UserService',
            'sulu_security.document.serializer.subscriber.security' => 'getSuluSecurity_Document_Serializer_Subscriber_SecurityService',
            'sulu_security.group_repository' => 'getSuluSecurity_GroupRepositoryService',
            'sulu_security.mask_converter' => 'getSuluSecurity_MaskConverterService',
            'sulu_security.salt_generator' => 'getSuluSecurity_SaltGeneratorService',
            'sulu_security.token_generator' => 'getSuluSecurity_TokenGeneratorService',
            'sulu_security.twig_extension.user' => 'getSuluSecurity_TwigExtension_UserService',
            'sulu_security.twig_extension.user.cache' => 'getSuluSecurity_TwigExtension_User_CacheService',
            'sulu_security.user_manager' => 'getSuluSecurity_UserManagerService',
            'sulu_security.user_provider' => 'getSuluSecurity_UserProviderService',
            'sulu_security.user_repository' => 'getSuluSecurity_UserRepositoryService',
            'sulu_security.user_setting_repository' => 'getSuluSecurity_UserSettingRepositoryService',
            'sulu_snippet.content.snippet' => 'getSuluSnippet_Content_SnippetService',
            'sulu_snippet.controller.snippet' => 'getSuluSnippet_Controller_SnippetService',
            'sulu_snippet.default_snippet.manager' => 'getSuluSnippet_DefaultSnippet_ManagerService',
            'sulu_snippet.document.snippet_initializer' => 'getSuluSnippet_Document_SnippetInitializerService',
            'sulu_snippet.form.snippet' => 'getSuluSnippet_Form_SnippetService',
            'sulu_snippet.jsconfig' => 'getSuluSnippet_JsconfigService',
            'sulu_snippet.repository' => 'getSuluSnippet_RepositoryService',
            'sulu_snippet.resolver' => 'getSuluSnippet_ResolverService',
            'sulu_snippet.twig.default_snippet' => 'getSuluSnippet_Twig_DefaultSnippetService',
            'sulu_snippet.twig.snippet' => 'getSuluSnippet_Twig_SnippetService',
            'sulu_snippet.twig.snippet.memoized' => 'getSuluSnippet_Twig_Snippet_MemoizedService',
            'sulu_tag.content.type.tag_list' => 'getSuluTag_Content_Type_TagListService',
            'sulu_tag.search.tags_converter' => 'getSuluTag_Search_TagsConverterService',
            'sulu_tag.tag_manager' => 'getSuluTag_TagManagerService',
            'sulu_tag.tag_repository' => 'getSuluTag_TagRepositoryService',
            'sulu_tag.tag_request_handler' => 'getSuluTag_TagRequestHandlerService',
            'sulu_tag.twig_extension' => 'getSuluTag_TwigExtensionService',
            'sulu_translate.export' => 'getSuluTranslate_ExportService',
            'sulu_translate.import' => 'getSuluTranslate_ImportService',
            'sulu_website.analytics.manager' => 'getSuluWebsite_Analytics_ManagerService',
            'sulu_website.analytics.repository' => 'getSuluWebsite_Analytics_RepositoryService',
            'sulu_website.analytics.response_listener' => 'getSuluWebsite_Analytics_ResponseListenerService',
            'sulu_website.data_collector.sulu_collector' => 'getSuluWebsite_DataCollector_SuluCollectorService',
            'sulu_website.default_locale.portal_provider' => 'getSuluWebsite_DefaultLocale_PortalProviderService',
            'sulu_website.default_locale.request_provider' => 'getSuluWebsite_DefaultLocale_RequestProviderService',
            'sulu_website.domains.repository' => 'getSuluWebsite_Domains_RepositoryService',
            'sulu_website.event_listener.set_theme' => 'getSuluWebsite_EventListener_SetThemeService',
            'sulu_website.event_subscriber.generator' => 'getSuluWebsite_EventSubscriber_GeneratorService',
            'sulu_website.exception.controller' => 'getSuluWebsite_Exception_ControllerService',
            'sulu_website.http_cache.clearer' => 'getSuluWebsite_HttpCache_ClearerService',
            'sulu_website.navigation_mapper' => 'getSuluWebsite_NavigationMapperService',
            'sulu_website.provider.content' => 'getSuluWebsite_Provider_ContentService',
            'sulu_website.resolver.parameter' => 'getSuluWebsite_Resolver_ParameterService',
            'sulu_website.resolver.request_analyzer' => 'getSuluWebsite_Resolver_RequestAnalyzerService',
            'sulu_website.resolver.structure' => 'getSuluWebsite_Resolver_StructureService',
            'sulu_website.router_listener' => 'getSuluWebsite_RouterListenerService',
            'sulu_website.routing.portal_loader' => 'getSuluWebsite_Routing_PortalLoaderService',
            'sulu_website.sitemap' => 'getSuluWebsite_SitemapService',
            'sulu_website.sitemap_xml_generator' => 'getSuluWebsite_SitemapXmlGeneratorService',
            'sulu_website.templating.event_aware_engine' => 'getSuluWebsite_Templating_EventAwareEngineService',
            'sulu_website.translator.request_analyzer' => 'getSuluWebsite_Translator_RequestAnalyzerService',
            'sulu_website.twig.content' => 'getSuluWebsite_Twig_ContentService',
            'sulu_website.twig.content.memoized' => 'getSuluWebsite_Twig_Content_MemoizedService',
            'sulu_website.twig.content_path' => 'getSuluWebsite_Twig_ContentPathService',
            'sulu_website.twig.meta' => 'getSuluWebsite_Twig_MetaService',
            'sulu_website.twig.navigation' => 'getSuluWebsite_Twig_NavigationService',
            'sulu_website.twig.navigation.memoized' => 'getSuluWebsite_Twig_Navigation_MemoizedService',
            'sulu_website.twig.seo' => 'getSuluWebsite_Twig_SeoService',
            'sulu_website.twig.sitemap' => 'getSuluWebsite_Twig_SitemapService',
            'sulu_website.twig.sitemap.memoized' => 'getSuluWebsite_Twig_Sitemap_MemoizedService',
            'sulu_website.twig.util' => 'getSuluWebsite_Twig_UtilService',
            'sulu_websocket.admin' => 'getSuluWebsocket_AdminService',
            'sulu_websocket.admin.message_builder' => 'getSuluWebsocket_Admin_MessageBuilderService',
            'sulu_websocket.fallback_controller' => 'getSuluWebsocket_FallbackControllerService',
            'sulu_websocket.manager' => 'getSuluWebsocket_ManagerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating.cache_warmer.template_paths' => 'getTemplating_CacheWarmer_TemplatePathsService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.finder' => 'getTemplating_FinderService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator.data_collector' => 'getTranslator_DataCollectorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
        );
        $this->aliases = array(
            'cmf_routing.route_provider' => 'sulu_website.provider.content',
            'console.command.dtl_bundle_phpcrmigrations_command_initializecommand' => 'phpcr_migrations.command.initialize',
            'console.command.dtl_bundle_phpcrmigrations_command_migratecommand' => 'phpcr_migrations.command.migrate',
            'console.command.dtl_bundle_phpcrmigrations_command_statuscommand' => 'phpcr_migrations.command.status',
            'console.command.massive_bundle_searchbundle_command_indexrebuildcommand' => 'massive_search.command.index_rebuild_deprecated',
            'console.command.massive_bundle_searchbundle_command_initcommand' => 'massive_search.command.init',
            'console.command.massive_bundle_searchbundle_command_purgecommand' => 'massive_search.command.purge',
            'console.command.massive_bundle_searchbundle_command_querycommand' => 'massive_search.command.query',
            'console.command.massive_bundle_searchbundle_command_reindexcommand' => 'massive_search.command.reindex',
            'console.command.massive_bundle_searchbundle_command_statuscommand' => 'massive_search.command.status',
            'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
            'console.command.sulu_bundle_corebundle_commandoptional_sulubuildcommand' => 'massive_build.command.build',
            'console.command.sulu_bundle_documentmanagerbundle_command_fixturesloadcommand' => 'sulu_document_manager.command.fixtures_load',
            'console.command.sulu_bundle_documentmanagerbundle_command_initializecommand' => 'sulu_document_manager.command.initialize',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'doctrine_phpcr.jackalope_doctrine_dbal.default_connection' => 'doctrine.dbal.default_connection',
            'doctrine_phpcr.odm.document_manager' => 'doctrine_phpcr.odm.default_document_manager',
            'doctrine_phpcr.session' => 'doctrine_phpcr.default_session',
            'event_dispatcher' => 'debug.event_dispatcher',
            'fos_rest.exception_handler' => 'sulu_core.rest.exception_wrapper_handler',
            'fos_rest.inflector' => 'fos_rest.inflector.doctrine',
            'fos_rest.router' => 'cmf_routing.router',
            'fos_rest.serializer' => 'jms_serializer',
            'fos_rest.templating' => 'sulu_website.templating.event_aware_engine',
            'jms_serializer.cache_naming_strategy' => 'jms_serializer.naming_strategy',
            'mailer' => 'swiftmailer.mailer.default',
            'massive_search.adapter' => 'massive_search.adapter.zend_lucene',
            'massive_search.factory' => 'sulu_search.search.factory',
            'massive_search.index_name_decorator.default' => 'massive_search.prefix_decorator',
            'router' => 'cmf_routing.router',
            'router_listener' => 'sulu_website.router_listener',
            'serializer' => 'jms_serializer',
            'session.storage' => 'session.storage.native',
            'sulu_http_cache.handler' => 'sulu_http_cache.handler.aggregate',
            'sulu_http_cache.proxy_client' => 'sulu_http_cache.proxy_client.symfony',
            'sulu_website.default_locale.provider' => 'sulu_website.default_locale.portal_provider',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
            'templating' => 'sulu_website.templating.event_aware_engine',
            'translator' => 'sulu_website.translator.request_analyzer',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader A Doctrine\Common\Annotations\CachedReader instance.
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(new \Doctrine\Common\Annotations\AnnotationReader(), new \Doctrine\Common\Cache\FilesystemCache((__DIR__.'/annotations')), true);
    }

    /**
     * Gets the 'assetic.asset_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Factory\LazyAssetManager A Assetic\Factory\LazyAssetManager instance.
     */
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');

        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Liip\ThemeBundle\Assetic\TwigFormulaLoader($this->get('twig'), $this->get('monolog.logger.assetic', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('liip_theme.active_theme')), new \Assetic\Cache\ConfigCache((__DIR__.'/assetic/config')), true)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClientWebsiteBundle', ($this->targetDirs[3].'/Resources/ClientWebsiteBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClientWebsiteBundle', ($this->targetDirs[4].'/src/Client/Bundle/WebsiteBundle/Resources/views'), '/\\.[^.]+\\.twig$/'), 2 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClientWebsiteBundle', ($this->targetDirs[3].'/Resources/ClientWebsiteBundle/themes/default'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClientWebsiteBundle', ($this->targetDirs[4].'/src/Client/Bundle/WebsiteBundle/Resources/themes/default'), '/\\.[^.]+\\.twig$/'))))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', ($this->targetDirs[3].'/Resources/themes/default'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', ($this->targetDirs[3].'/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');

        return $instance;
    }

    /**
     * Gets the 'assetic.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\Controller\AsseticController A Symfony\Bundle\AsseticBundle\Controller\AsseticController instance.
     */
    protected function getAssetic_ControllerService()
    {
        return $this->services['assetic.controller'] = new \Symfony\Bundle\AsseticBundle\Controller\AsseticController($this->get('assetic.asset_manager'), new \Assetic\Cache\FilesystemCache((__DIR__.'/assetic/assets')), false, $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'assetic.filter.cssrewrite' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\CssRewriteFilter A Assetic\Filter\CssRewriteFilter instance.
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /**
     * Gets the 'assetic.filter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\FilterManager A Symfony\Bundle\AsseticBundle\FilterManager instance.
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite'));
    }

    /**
     * Gets the 'assetic.request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\EventListener\RequestListener A Symfony\Bundle\AsseticBundle\EventListener\RequestListener instance.
     */
    protected function getAssetic_RequestListenerService()
    {
        return $this->services['assetic.request_listener'] = new \Symfony\Bundle\AsseticBundle\EventListener\RequestListener();
    }

    /**
     * Gets the 'assets.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext A Symfony\Component\Asset\Context\RequestStackContext instance.
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext($this->get('request_stack'));
    }

    /**
     * Gets the 'assets.packages' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Packages A Symfony\Component\Asset\Packages instance.
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), $this->get('assets.context')), array());
    }

    /**
     * Gets the 'bazinga_hateoas.expression_language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bazinga\Bundle\HateoasBundle\ExpressionLanguage\ExpressionLanguage A Bazinga\Bundle\HateoasBundle\ExpressionLanguage\ExpressionLanguage instance.
     */
    protected function getBazingaHateoas_ExpressionLanguageService()
    {
        return $this->services['bazinga_hateoas.expression_language'] = new \Bazinga\Bundle\HateoasBundle\ExpressionLanguage\ExpressionLanguage();
    }

    /**
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance.
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance.
     */
    protected function getCacheWarmerService()
    {
        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => $this->get('templating.cache_warmer.template_paths'), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => $this->get('kernel.class_cache.cache_warmer'), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this->get('translator.default')), 4 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('cmf_routing.router')), 5 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $this->get('templating.finder', ContainerInterface::NULL_ON_INVALID_REFERENCE), array()), 6 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this->get('twig'), new \Symfony\Bundle\TwigBundle\TemplateIterator($this->get('kernel'), $this->targetDirs[3], array())), 7 => $this->get('sulu.cache.warmer.structure'), 8 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine')), 9 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine_phpcr')), 10 => $this->get('sulu_document_manager.proxy_manager.cache_warmer')));
    }

    /**
     * Gets the 'cmf_core.form.type.checkbox_url_label' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\CoreBundle\Form\Type\CheckboxUrlLabelFormType A Symfony\Cmf\Bundle\CoreBundle\Form\Type\CheckboxUrlLabelFormType instance.
     */
    protected function getCmfCore_Form_Type_CheckboxUrlLabelService()
    {
        return $this->services['cmf_core.form.type.checkbox_url_label'] = new \Symfony\Cmf\Bundle\CoreBundle\Form\Type\CheckboxUrlLabelFormType($this->get('cmf_routing.router'));
    }

    /**
     * Gets the 'cmf_core.persistence.phpcr.non_translatable_metadata_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\CoreBundle\Doctrine\Phpcr\NonTranslatableMetadataListener A Symfony\Cmf\Bundle\CoreBundle\Doctrine\Phpcr\NonTranslatableMetadataListener instance.
     */
    protected function getCmfCore_Persistence_Phpcr_NonTranslatableMetadataListenerService()
    {
        return $this->services['cmf_core.persistence.phpcr.non_translatable_metadata_listener'] = new \Symfony\Cmf\Bundle\CoreBundle\Doctrine\Phpcr\NonTranslatableMetadataListener();
    }

    /**
     * Gets the 'cmf_core.publish_workflow.checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\CoreBundle\PublishWorkflow\AlwaysPublishedWorkflowChecker A Symfony\Cmf\Bundle\CoreBundle\PublishWorkflow\AlwaysPublishedWorkflowChecker instance.
     */
    protected function getCmfCore_PublishWorkflow_CheckerService()
    {
        return $this->services['cmf_core.publish_workflow.checker'] = new \Symfony\Cmf\Bundle\CoreBundle\PublishWorkflow\AlwaysPublishedWorkflowChecker();
    }

    /**
     * Gets the 'cmf_core.templating.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\CoreBundle\Templating\Helper\CmfHelper A Symfony\Cmf\Bundle\CoreBundle\Templating\Helper\CmfHelper instance.
     */
    protected function getCmfCore_Templating_HelperService()
    {
        return $this->services['cmf_core.templating.helper'] = new \Symfony\Cmf\Bundle\CoreBundle\Templating\Helper\CmfHelper($this->get('cmf_core.publish_workflow.checker', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('doctrine_phpcr', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL);
    }

    /**
     * Gets the 'cmf_core.twig.children_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\CoreBundle\Twig\Extension\CmfExtension A Symfony\Cmf\Bundle\CoreBundle\Twig\Extension\CmfExtension instance.
     */
    protected function getCmfCore_Twig_ChildrenExtensionService()
    {
        return $this->services['cmf_core.twig.children_extension'] = new \Symfony\Cmf\Bundle\CoreBundle\Twig\Extension\CmfExtension($this->get('cmf_core.templating.helper'));
    }

    /**
     * Gets the 'cmf_routing.dynamic_router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Routing\DynamicRouter A Symfony\Cmf\Bundle\RoutingBundle\Routing\DynamicRouter instance.
     */
    protected function getCmfRouting_DynamicRouterService()
    {
        $this->services['cmf_routing.dynamic_router'] = $instance = new \Symfony\Cmf\Bundle\RoutingBundle\Routing\DynamicRouter($this->get('router.request_context'), $this->get('cmf_routing.nested_matcher'), $this->get('cmf_routing.generator'), NULL, $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('sulu_website.provider.content'));

        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->addRouteEnhancer($this->get('cmf_routing.enhancer.route_content'), 100);

        return $instance;
    }

    /**
     * Gets the 'cmf_routing.enhancer.route_content' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\Routing\Enhancer\RouteContentEnhancer A Symfony\Cmf\Component\Routing\Enhancer\RouteContentEnhancer instance.
     */
    protected function getCmfRouting_Enhancer_RouteContentService()
    {
        return $this->services['cmf_routing.enhancer.route_content'] = new \Symfony\Cmf\Component\Routing\Enhancer\RouteContentEnhancer('_route_object', '_content');
    }

    /**
     * Gets the 'cmf_routing.final_matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\Routing\NestedMatcher\UrlMatcher A Symfony\Cmf\Component\Routing\NestedMatcher\UrlMatcher instance.
     */
    protected function getCmfRouting_FinalMatcherService()
    {
        return $this->services['cmf_routing.final_matcher'] = new \Symfony\Cmf\Component\Routing\NestedMatcher\UrlMatcher($this->get('cmf_routing.matcher.dummy_collection'), $this->get('cmf_routing.matcher.dummy_context'));
    }

    /**
     * Gets the 'cmf_routing.generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\Routing\ContentAwareGenerator A Symfony\Cmf\Component\Routing\ContentAwareGenerator instance.
     */
    protected function getCmfRouting_GeneratorService()
    {
        return $this->services['cmf_routing.generator'] = new \Symfony\Cmf\Component\Routing\ContentAwareGenerator($this->get('sulu_website.provider.content'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'cmf_routing.nested_matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher A Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher instance.
     */
    protected function getCmfRouting_NestedMatcherService()
    {
        return $this->services['cmf_routing.nested_matcher'] = new \Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher($this->get('sulu_website.provider.content'), $this->get('cmf_routing.final_matcher'));
    }

    /**
     * Gets the 'cmf_routing.redirect_controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Controller\RedirectController A Symfony\Cmf\Bundle\RoutingBundle\Controller\RedirectController instance.
     */
    protected function getCmfRouting_RedirectControllerService()
    {
        return $this->services['cmf_routing.redirect_controller'] = new \Symfony\Cmf\Bundle\RoutingBundle\Controller\RedirectController($this->get('cmf_routing.router'));
    }

    /**
     * Gets the 'cmf_routing.route_type_form_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Form\Type\RouteTypeType A Symfony\Cmf\Bundle\RoutingBundle\Form\Type\RouteTypeType instance.
     */
    protected function getCmfRouting_RouteTypeFormTypeService()
    {
        return $this->services['cmf_routing.route_type_form_type'] = new \Symfony\Cmf\Bundle\RoutingBundle\Form\Type\RouteTypeType();
    }

    /**
     * Gets the 'cmf_routing.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\Routing\ChainRouter A Symfony\Cmf\Component\Routing\ChainRouter instance.
     */
    protected function getCmfRouting_RouterService()
    {
        $a = $this->get('router.request_context');

        $b = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, (__DIR__.'/assetic/routing.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevUrlMatcher', 'strict_requirements' => true, 'resource_type' => 'yaml'), $a, $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $b->setConfigCacheFactory($this->get('config_cache_factory'));

        $this->services['cmf_routing.router'] = $instance = new \Symfony\Cmf\Component\Routing\ChainRouter($this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setContext($a);
        $instance->add($b, '100');
        $instance->add($this->get('cmf_routing.dynamic_router'), '20');
        $instance->add($this->get('sulu_custom_urls.routing.router'), 30);

        return $instance;
    }

    /**
     * Gets the 'cmf_sulu_custom_urls.final_matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\Routing\NestedMatcher\UrlMatcher A Symfony\Cmf\Component\Routing\NestedMatcher\UrlMatcher instance.
     */
    protected function getCmfSuluCustomUrls_FinalMatcherService()
    {
        return $this->services['cmf_sulu_custom_urls.final_matcher'] = new \Symfony\Cmf\Component\Routing\NestedMatcher\UrlMatcher($this->get('cmf_routing.matcher.dummy_collection'), $this->get('cmf_routing.matcher.dummy_context'));
    }

    /**
     * Gets the 'config_cache_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory A Symfony\Component\Config\ResourceCheckerConfigCacheFactory instance.
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(array(0 => new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker(), 1 => new \Symfony\Component\Config\Resource\BCResourceInterfaceChecker()));
    }

    /**
     * Gets the 'data_collector.dump' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector A Symfony\Component\HttpKernel\DataCollector\DumpDataCollector instance.
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL, 'UTF-8', $this->get('request_stack'), NULL);
    }

    /**
     * Gets the 'data_collector.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector A Symfony\Component\Form\Extension\DataCollector\FormDataCollector instance.
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector($this->get('data_collector.form.extractor'));
    }

    /**
     * Gets the 'data_collector.form.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor A Symfony\Component\Form\Extension\DataCollector\FormDataExtractor instance.
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the 'data_collector.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector A Symfony\Component\HttpKernel\DataCollector\RequestDataCollector instance.
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the 'data_collector.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector instance.
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the 'data_collector.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\DataCollector\TranslationDataCollector A Symfony\Component\Translation\DataCollector\TranslationDataCollector instance.
     */
    protected function getDataCollector_TranslationService()
    {
        return $this->services['data_collector.translation'] = new \Symfony\Component\Translation\DataCollector\TranslationDataCollector($this->get('translator.data_collector'));
    }

    /**
     * Gets the 'debug.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver A Symfony\Component\HttpKernel\Controller\TraceableControllerResolver instance.
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver($this->get('controller_resolver'), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'debug.debug_handlers_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener A Symfony\Component\HttpKernel\EventListener\DebugHandlersListener instance.
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE), -4182, NULL, true, NULL);
    }

    /**
     * Gets the 'debug.dump_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener A Symfony\Component\HttpKernel\EventListener\DumpListener instance.
     */
    protected function getDebug_DumpListenerService()
    {
        return $this->services['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener($this->get('var_dumper.cloner'), $this->get('data_collector.dump'));
    }

    /**
     * Gets the 'debug.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher A Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher instance.
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), $this->get('debug.stopwatch'), $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.router', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'assetic.request_listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.body_listener', 1 => 'onKernelRequest'), 10);
        $instance->addListenerService('massive_search.index', array(0 => 'massive_search.events.index_listener', 1 => 'onIndex'), 0);
        $instance->addListenerService('massive_search.deindex', array(0 => 'massive_search.events.deindex_listener', 1 => 'onDeindex'), 0);
        $instance->addListenerService('massive_search.index_rebuild', array(0 => 'massive_search.events.zend_rebuild', 1 => 'onIndexRebuild'), -999);
        $instance->addListenerService('sulu_security.permission_update', array(0 => 'sulu_media.permission_listener', 1 => 'onPermissionUpdate'), 0);
        $instance->addListenerService('massive_search.hit', array(0 => 'sulu_search.event_listener.hit', 1 => 'onHit'), 0);
        $instance->addListenerService('sulu_security.permission_update', array(0 => 'sulu_content.permission_listener', 1 => 'onPermissionUpdate'), 0);
        $instance->addListenerService('kernel.exception', array(0 => 'sulu_content.preview.exception_listener', 1 => 'onKernelException'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'sulu_website.analytics.response_listener', 1 => 'onResponse'), -5);
        $instance->addListenerService('engine.initialize', array(0 => 'sulu_website.event_listener.set_theme', 1 => 'setActiveTheme'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('profiler_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener');
        $instance->addSubscriberService('data_collector.request', 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('monolog.handler.console', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('monolog.handler.console_very_verbose', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('massive_search.search.event_subscriber.purge_subscriber', 'Massive\\Bundle\\SearchBundle\\Search\\EventSubscriber\\PurgeSubscriber');
        $instance->addSubscriberService('sulu_media.search.subscriber.structure_media', 'Sulu\\Bundle\\MediaBundle\\Search\\Subscriber\\StructureMediaSearchSubscriber');
        $instance->addSubscriberService('sulu_media.search.subscriber.media', 'Sulu\\Bundle\\MediaBundle\\Search\\Subscriber\\MediaSearchSubscriber');
        $instance->addSubscriberService('sulu_content.search.event_subscriber.blame_timestamp', 'Sulu\\Bundle\\ContentBundle\\Search\\EventSubscriber\\BlameTimestampSubscriber');
        $instance->addSubscriberService('sulu_website.router_listener', 'Sulu\\Bundle\\WebsiteBundle\\EventListener\\RouterListener');
        $instance->addSubscriberService('sulu_website.event_subscriber.generator', 'Sulu\\Bundle\\WebsiteBundle\\EventSubscriber\\GeneratorEventSubscriber');
        $instance->addSubscriberService('sulu_http_cache.event_subscriber.content_mapper', 'Sulu\\Component\\HttpCache\\EventSubscriber\\ContentMapperSubscriber');
        $instance->addSubscriberService('sulu_http_cache.event_subscriber.flush', 'Sulu\\Component\\HttpCache\\EventSubscriber\\FlushSubscriber');
        $instance->addSubscriberService('sulu_http_cache.event_subscriber.update_response', 'Sulu\\Component\\HttpCache\\EventSubscriber\\UpdateResponseSubscriber');
        $instance->addSubscriberService('web_profiler.debug_toolbar', 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener');
        $instance->addSubscriberService('debug.dump_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DumpListener');

        return $instance;
    }

    /**
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance.
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance.
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance.
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance.
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Logging\LoggerChain();
        $a->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $a->addLogger($this->get('doctrine.dbal.logger.profiling.default'));

        $b = new \Doctrine\DBAL\Configuration();
        $b->setSQLLogger($a);

        $c = new \Gedmo\Tree\TreeListener();
        $c->setAnnotationReader($this->get('annotation_reader'));

        $d = new \Doctrine\ORM\Tools\ResolveTargetEntityListener();
        $d->addResolveTargetEntity('Sulu\\Bundle\\MediaBundle\\Entity\\CollectionInterface', 'Sulu\\Bundle\\MediaBundle\\Entity\\Collection', array());
        $d->addResolveTargetEntity('Sulu\\Bundle\\ContactBundle\\Entity\\AccountInterface', 'Sulu\\Bundle\\ContactBundle\\Entity\\Account', array());
        $d->addResolveTargetEntity('Sulu\\Component\\Contact\\Model\\ContactInterface', 'Sulu\\Bundle\\ContactBundle\\Entity\\Contact', array());
        $d->addResolveTargetEntity('Sulu\\Component\\Security\\Authentication\\UserInterface', 'Sulu\\Bundle\\SecurityBundle\\Entity\\User', array());
        $d->addResolveTargetEntity('Sulu\\Component\\Security\\Authentication\\RoleInterface', 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role', array());
        $d->addResolveTargetEntity('Sulu\\Component\\Security\\Authorization\\AccessControl\\AccessControlInterface', 'Sulu\\Bundle\\SecurityBundle\\Entity\\AccessControl', array());

        $e = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $e->addEventSubscriber($this->get('sulu.persistence.event_subscriber.orm.metadata'));
        $e->addEventSubscriber($this->get('sulu.persistence.event_subscriber.orm.timestampable'));
        $e->addEventSubscriber($c);
        $e->addEventSubscriber($d);
        $e->addEventSubscriber($this->get('sulu.persistence.event_subscriber.orm.user_blame'));
        $e->addEventSubscriber($this->get('massive_search.search.event_subscriber.doctrine_orm'));
        $e->addEventListener(array(0 => 'loadClassMetadata'), $this->get('doctrine.orm.default_listeners.attach_entity_listeners'));
        $e->addEventListener(array(0 => 'postGenerateSchema'), 'doctrine_phpcr.jackalope_doctrine_dbal.schema_listener');
        $e->addEventListener(array(0 => 'postPersist'), $this->get('sulu_contact.account_listener'));

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => NULL, 'dbname' => 'sulu', 'user' => 'root', 'password' => NULL, 'charset' => 'UTF8', 'driverOptions' => array(), 'serverVersion' => 5.5, 'defaultTableOptions' => array()), $b, $e, array());
    }

    /**
     * Gets the 'doctrine.orm.default_entity_listener_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Mapping\DefaultEntityListenerResolver A Doctrine\ORM\Mapping\DefaultEntityListenerResolver instance.
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\ORM\Mapping\DefaultEntityListenerResolver();
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance.
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        $a = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array(($this->targetDirs[4].'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Tree/Entity') => 'Gedmo\\Tree\\Entity', ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/Resources/config/doctrine') => 'Sulu\\Bundle\\ContactBundle\\Entity', ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Resources/config/doctrine') => 'Sulu\\Bundle\\MediaBundle\\Entity', ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/Resources/config/doctrine') => 'Sulu\\Bundle\\SecurityBundle\\Entity', ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/Resources/config/doctrine') => 'Sulu\\Bundle\\CategoryBundle\\Entity', ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/TagBundle/Resources/config/doctrine') => 'Sulu\\Bundle\\TagBundle\\Entity', ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Resources/config/doctrine') => 'Sulu\\Bundle\\WebsiteBundle\\Entity', ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/TranslateBundle/Resources/config/doctrine') => 'Sulu\\Bundle\\TranslateBundle\\Entity'));
        $a->setGlobalBasename('mapping');

        $b = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $b->addDriver($a, 'Gedmo\\Tree\\Entity');
        $b->addDriver($a, 'Sulu\\Bundle\\ContactBundle\\Entity');
        $b->addDriver($a, 'Sulu\\Bundle\\MediaBundle\\Entity');
        $b->addDriver($a, 'Sulu\\Bundle\\SecurityBundle\\Entity');
        $b->addDriver($a, 'Sulu\\Bundle\\CategoryBundle\\Entity');
        $b->addDriver($a, 'Sulu\\Bundle\\TagBundle\\Entity');
        $b->addDriver($a, 'Sulu\\Bundle\\WebsiteBundle\\Entity');
        $b->addDriver($a, 'Sulu\\Bundle\\TranslateBundle\\Entity');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($this->get('annotation_reader'), array(0 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/CoreBundle/Entity'))), 'Sulu\\Bundle\\CoreBundle\\Entity');

        $c = new \Doctrine\ORM\Configuration();
        $c->setEntityNamespaces(array('GedmoTree' => 'Gedmo\\Tree\\Entity', 'SuluCoreBundle' => 'Sulu\\Bundle\\CoreBundle\\Entity', 'SuluContactBundle' => 'Sulu\\Bundle\\ContactBundle\\Entity', 'SuluMediaBundle' => 'Sulu\\Bundle\\MediaBundle\\Entity', 'SuluSecurityBundle' => 'Sulu\\Bundle\\SecurityBundle\\Entity', 'SuluCategoryBundle' => 'Sulu\\Bundle\\CategoryBundle\\Entity', 'SuluTagBundle' => 'Sulu\\Bundle\\TagBundle\\Entity', 'SuluWebsiteBundle' => 'Sulu\\Bundle\\WebsiteBundle\\Entity', 'SuluTranslateBundle' => 'Sulu\\Bundle\\TranslateBundle\\Entity'));
        $c->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache'));
        $c->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_query_cache'));
        $c->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_result_cache'));
        $c->setMetadataDriverImpl($b);
        $c->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $c->setProxyNamespace('Proxies');
        $c->setAutoGenerateProxyClasses(true);
        $c->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $c->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $c->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $c->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $c->setEntityListenerResolver($this->get('doctrine.orm.default_entity_listener_resolver'));
        $c->addCustomStringFunction('group_concat', 'Oro\\ORM\\Query\\AST\\Functions\\String\\GroupConcat');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $c);

        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.default_listeners.attach_entity_listeners' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener A Doctrine\ORM\Tools\AttachEntityListenersListener instance.
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the 'doctrine.orm.default_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance.
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance.
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance.
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_4f5620c08261fa92936cab7f8ec640fe31121603450db382a77a55e85ed3f738');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_query_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_4f5620c08261fa92936cab7f8ec640fe31121603450db382a77a55e85ed3f738');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_result_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_4f5620c08261fa92936cab7f8ec640fe31121603450db382a77a55e85ed3f738');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.phpcr_meta' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\FilesystemCache A Doctrine\Common\Cache\FilesystemCache instance.
     */
    protected function getDoctrineCache_Providers_PhpcrMetaService()
    {
        return $this->services['doctrine_cache.providers.phpcr_meta'] = new \Doctrine\Common\Cache\FilesystemCache((__DIR__.'/doctrine/cache/file_system'), NULL, 2);
    }

    /**
     * Gets the 'doctrine_cache.providers.phpcr_nodes' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\FilesystemCache A Doctrine\Common\Cache\FilesystemCache instance.
     */
    protected function getDoctrineCache_Providers_PhpcrNodesService()
    {
        return $this->services['doctrine_cache.providers.phpcr_nodes'] = new \Doctrine\Common\Cache\FilesystemCache((__DIR__.'/doctrine/cache/file_system'), NULL, 2);
    }

    /**
     * Gets the 'doctrine_phpcr' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\ManagerRegistry A Doctrine\Bundle\PHPCRBundle\ManagerRegistry instance.
     */
    protected function getDoctrinePhpcrService()
    {
        $this->services['doctrine_phpcr'] = $instance = new \Doctrine\Bundle\PHPCRBundle\ManagerRegistry('PHPCR', array('default' => 'doctrine_phpcr.default_session'), array('default' => 'doctrine_phpcr.odm.default_document_manager'), 'default', 'default', 'Doctrine\\Common\\Proxy\\Proxy');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'doctrine_phpcr.console_dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PHPCR\Util\Console\Helper\PhpcrConsoleDumperHelper A PHPCR\Util\Console\Helper\PhpcrConsoleDumperHelper instance.
     */
    protected function getDoctrinePhpcr_ConsoleDumperService()
    {
        return $this->services['doctrine_phpcr.console_dumper'] = new \PHPCR\Util\Console\Helper\PhpcrConsoleDumperHelper();
    }

    /**
     * Gets the 'doctrine_phpcr.default_session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Jackalope\Session A Jackalope\Session instance.
     */
    protected function getDoctrinePhpcr_DefaultSessionService()
    {
        return $this->services['doctrine_phpcr.default_session'] = $this->get('doctrine_phpcr.jackalope.repository.default')->login(new \PHPCR\SimpleCredentials('admin', 'admin'), 'default');
    }

    /**
     * Gets the 'doctrine_phpcr.initializer_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Initializer\InitializerManager A Doctrine\Bundle\PHPCRBundle\Initializer\InitializerManager instance.
     */
    protected function getDoctrinePhpcr_InitializerManagerService()
    {
        return $this->services['doctrine_phpcr.initializer_manager'] = new \Doctrine\Bundle\PHPCRBundle\Initializer\InitializerManager($this->get('doctrine_phpcr'));
    }

    /**
     * Gets the 'doctrine_phpcr.jackalope.repository.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Jackalope\Repository A Jackalope\Repository instance.
     */
    protected function getDoctrinePhpcr_Jackalope_Repository_DefaultService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.default'] = $this->get('doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal')->getRepository(array('jackalope.doctrine_dbal_connection' => $this->get('doctrine.dbal.default_connection'), 'jackalope.check_login_on_server' => false));
    }

    /**
     * Gets the 'doctrine_phpcr.jackalope.repository.factory.doctrinedbal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Jackalope\Repository A Jackalope\Repository instance.
     */
    protected function getDoctrinePhpcr_Jackalope_Repository_Factory_DoctrinedbalService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.factory.doctrinedbal'] = $this->get('doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal')->getRepository(array());
    }

    /**
     * Gets the 'doctrine_phpcr.jackalope.repository.factory.jackrabbit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Jackalope\Repository A Jackalope\Repository instance.
     */
    protected function getDoctrinePhpcr_Jackalope_Repository_Factory_JackrabbitService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.factory.jackrabbit'] = $this->get('doctrine_phpcr.jackalope.repository.factory.service.jackrabbit')->getRepository(array());
    }

    /**
     * Gets the 'doctrine_phpcr.jackalope.repository.factory.prismic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Jackalope\Repository A Jackalope\Repository instance.
     */
    protected function getDoctrinePhpcr_Jackalope_Repository_Factory_PrismicService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.factory.prismic'] = $this->get('doctrine_phpcr.jackalope.repository.factory.service.prismic')->getRepository(array());
    }

    /**
     * Gets the 'doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Jackalope\RepositoryFactoryDoctrineDBAL A Jackalope\RepositoryFactoryDoctrineDBAL instance.
     */
    protected function getDoctrinePhpcr_Jackalope_Repository_Factory_Service_DoctrinedbalService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.factory.service.doctrinedbal'] = new \Jackalope\RepositoryFactoryDoctrineDBAL();
    }

    /**
     * Gets the 'doctrine_phpcr.jackalope.repository.factory.service.jackrabbit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Jackalope\RepositoryFactoryJackrabbit A Jackalope\RepositoryFactoryJackrabbit instance.
     */
    protected function getDoctrinePhpcr_Jackalope_Repository_Factory_Service_JackrabbitService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.factory.service.jackrabbit'] = new \Jackalope\RepositoryFactoryJackrabbit();
    }

    /**
     * Gets the 'doctrine_phpcr.jackalope.repository.factory.service.prismic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Jackalope\RepositoryFactoryPrismic A Jackalope\RepositoryFactoryPrismic instance.
     */
    protected function getDoctrinePhpcr_Jackalope_Repository_Factory_Service_PrismicService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.factory.service.prismic'] = new \Jackalope\RepositoryFactoryPrismic();
    }

    /**
     * Gets the 'doctrine_phpcr.jackalope_doctrine_dbal.schema_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\EventListener\JackalopeDoctrineDbalSchemaListener A Doctrine\Bundle\PHPCRBundle\EventListener\JackalopeDoctrineDbalSchemaListener instance.
     */
    protected function getDoctrinePhpcr_JackalopeDoctrineDbal_SchemaListenerService()
    {
        return $this->services['doctrine_phpcr.jackalope_doctrine_dbal.schema_listener'] = new \Doctrine\Bundle\PHPCRBundle\EventListener\JackalopeDoctrineDbalSchemaListener(new \Jackalope\Transport\DoctrineDBAL\RepositorySchema());
    }

    /**
     * Gets the 'doctrine_phpcr.odm.default_document_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ODM\PHPCR\DocumentManager A Doctrine\ODM\PHPCR\DocumentManager instance.
     */
    protected function getDoctrinePhpcr_Odm_DefaultDocumentManagerService()
    {
        $a = new \Doctrine\Common\Cache\ArrayCache();
        $a->setNamespace('sf2phpcr_default_4f5620c08261fa92936cab7f8ec640fe31121603450db382a77a55e85ed3f738');

        $b = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $b->addDriver(new \Doctrine\ODM\PHPCR\Mapping\Driver\AnnotationDriver($this->get('annotation_reader'), array(0 => ($this->targetDirs[4].'/vendor/doctrine/phpcr-odm/lib/Doctrine/ODM/PHPCR/Document'))), 'Doctrine\\ODM\\PHPCR\\Document');

        $c = new \Doctrine\ODM\PHPCR\Configuration();
        $c->setDocumentNamespaces(array('__PHPCRODM__' => 'Doctrine\\ODM\\PHPCR\\Document'));
        $c->setMetadataCacheImpl($a);
        $c->setMetadataDriverImpl($b, false);
        $c->setProxyDir((__DIR__.'/doctrine/PHPCRProxies'));
        $c->setProxyNamespace('PHPCRProxies');
        $c->setAutoGenerateProxyClasses(false);
        $c->setClassMetadataFactoryName('Doctrine\\ODM\\PHPCR\\Mapping\\ClassMetadataFactory');
        $c->setDefaultRepositoryClassName('Doctrine\\ODM\\PHPCR\\DocumentRepository');

        $d = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $d->addEventSubscriber($this->get('cmf_core.persistence.phpcr.non_translatable_metadata_listener'));

        return $this->services['doctrine_phpcr.odm.default_document_manager'] = new \Doctrine\ODM\PHPCR\DocumentManager($this->get('doctrine_phpcr.default_session'), $c, $d);
    }

    /**
     * Gets the 'doctrine_phpcr.odm.form.type.path' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Form\Type\PathType A Doctrine\Bundle\PHPCRBundle\Form\Type\PathType instance.
     */
    protected function getDoctrinePhpcr_Odm_Form_Type_PathService()
    {
        return $this->services['doctrine_phpcr.odm.form.type.path'] = new \Doctrine\Bundle\PHPCRBundle\Form\Type\PathType($this->get('doctrine_phpcr'));
    }

    /**
     * Gets the 'doctrine_phpcr.odm.validator.valid_phpcr_odm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Validator\Constraints\ValidPhpcrOdmValidator A Doctrine\Bundle\PHPCRBundle\Validator\Constraints\ValidPhpcrOdmValidator instance.
     */
    protected function getDoctrinePhpcr_Odm_Validator_ValidPhpcrOdmService()
    {
        return $this->services['doctrine_phpcr.odm.validator.valid_phpcr_odm'] = new \Doctrine\Bundle\PHPCRBundle\Validator\Constraints\ValidPhpcrOdmValidator($this->get('doctrine_phpcr'));
    }

    /**
     * Gets the 'dtl_content.form.factory.document_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Form\Type\DocumentObjectType A Sulu\Component\Content\Form\Type\DocumentObjectType instance.
     */
    protected function getDtlContent_Form_Factory_DocumentTypeService()
    {
        return $this->services['dtl_content.form.factory.document_type'] = new \Sulu\Component\Content\Form\Type\DocumentObjectType($this->get('sulu_document_manager.document_manager'));
    }

    /**
     * Gets the 'dtl_content.form.type.home' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Form\Type\HomeDocumentType A Sulu\Bundle\ContentBundle\Form\Type\HomeDocumentType instance.
     */
    protected function getDtlContent_Form_Type_HomeService()
    {
        return $this->services['dtl_content.form.type.home'] = new \Sulu\Bundle\ContentBundle\Form\Type\HomeDocumentType($this->get('sulu.phpcr.session'), $this->get('sulu_document_manager.document_manager'));
    }

    /**
     * Gets the 'dtl_content.form.type.page' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Form\Type\PageDocumentType A Sulu\Bundle\ContentBundle\Form\Type\PageDocumentType instance.
     */
    protected function getDtlContent_Form_Type_PageService()
    {
        return $this->services['dtl_content.form.type.page'] = new \Sulu\Bundle\ContentBundle\Form\Type\PageDocumentType($this->get('sulu.phpcr.session'), $this->get('sulu_document_manager.document_manager'), $this->get('sulu_document_manager.metadata_factory'));
    }

    /**
     * Gets the 'dubture_ffmpeg.ffmpeg' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \FFMpeg\FFMpeg A FFMpeg\FFMpeg instance.
     */
    public function getDubtureFfmpeg_FfmpegService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['dubture_ffmpeg.ffmpeg'] = new FFMpegFFMpeg_000000006e8cffac00007f895803059dc1096b02324e91ad4722ab34f922d660(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getDubtureFfmpeg_FfmpegService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return \FFMpeg\FFMpeg::create(array('ffmpeg.binaries' => '/usr/local/bin/ffmpeg', 'ffprobe.binaries' => '/usr/local/bin/ffprobe', 'timeout' => 300, 'ffmpeg.threads' => 4), $this->get('logger'));
    }

    /**
     * Gets the 'dubture_ffmpeg.ffprobe' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \FFMpeg\FFProbe A FFMpeg\FFProbe instance.
     */
    public function getDubtureFfmpeg_FfprobeService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['dubture_ffmpeg.ffprobe'] = new FFMpegFFProbe_000000006e8cffab00007f895803059dc1096b02324e91ad4722ab34f922d660(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getDubtureFfmpeg_FfprobeService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return \FFMpeg\FFProbe::create(array('ffmpeg.binaries' => '/usr/local/bin/ffmpeg', 'ffprobe.binaries' => '/usr/local/bin/ffprobe'), $this->get('logger'));
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance.
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[3].'/Resources'));
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance.
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the 'form.csrf_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter A Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter instance.
     *
     * @deprecated The "form.csrf_provider" service is deprecated since Symfony 2.4 and will be removed in 3.0. Use the "security.csrf.token_manager" service instead.
     */
    protected function getForm_CsrfProviderService()
    {
        @trigger_error('The "form.csrf_provider" service is deprecated since Symfony 2.4 and will be removed in 3.0. Use the "security.csrf.token_manager" service instead.', E_USER_DEPRECATED);

        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter($this->get('security.csrf.token_manager'));
    }

    /**
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance.
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance.
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('form' => 'form.type.form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => 'form.type.form', 'birthday' => 'form.type.birthday', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\BirthdayType' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => 'form.type.choice', 'collection' => 'form.type.collection', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType' => 'form.type.collection', 'country' => 'form.type.country', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CountryType' => 'form.type.country', 'date' => 'form.type.date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType' => 'form.type.date', 'datetime' => 'form.type.datetime', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType' => 'form.type.datetime', 'email' => 'form.type.email', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType' => 'form.type.email', 'file' => 'form.type.file', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => 'form.type.file', 'hidden' => 'form.type.hidden', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType' => 'form.type.hidden', 'integer' => 'form.type.integer', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType' => 'form.type.integer', 'language' => 'form.type.language', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LanguageType' => 'form.type.language', 'locale' => 'form.type.locale', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType' => 'form.type.locale', 'money' => 'form.type.money', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType' => 'form.type.money', 'number' => 'form.type.number', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType' => 'form.type.number', 'password' => 'form.type.password', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType' => 'form.type.password', 'percent' => 'form.type.percent', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PercentType' => 'form.type.percent', 'radio' => 'form.type.radio', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RadioType' => 'form.type.radio', 'range' => 'form.type.range', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RangeType' => 'form.type.range', 'repeated' => 'form.type.repeated', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => 'form.type.repeated', 'search' => 'form.type.search', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SearchType' => 'form.type.search', 'textarea' => 'form.type.textarea', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType' => 'form.type.textarea', 'text' => 'form.type.text', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType' => 'form.type.text', 'time' => 'form.type.time', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType' => 'form.type.time', 'timezone' => 'form.type.timezone', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimezoneType' => 'form.type.timezone', 'url' => 'form.type.url', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType' => 'form.type.url', 'button' => 'form.type.button', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType' => 'form.type.button', 'submit' => 'form.type.submit', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => 'form.type.submit', 'reset' => 'form.type.reset', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ResetType' => 'form.type.reset', 'currency' => 'form.type.currency', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType' => 'form.type.currency', 'entity' => 'form.type.entity', 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => 'form.type.entity', 'cmf_core_checkbox_url_label' => 'cmf_core.form.type.checkbox_url_label', 'Symfony\\Cmf\\Bundle\\CoreBundle\\Form\\Type\\CheckboxUrlLabelFormType' => 'cmf_core.form.type.checkbox_url_label', 'phpcr_reference' => 'form.type.phpcr.reference', 'Doctrine\\Bundle\\PHPCRBundle\\Form\\Type\\PHPCRReferenceType' => 'form.type.phpcr.reference', 'phpcr_odm_reference_collection' => 'form.type.phpcr_odm.reference_collection', 'Doctrine\\Bundle\\PHPCRBundle\\Form\\Type\\PHPCRODMReferenceCollectionType' => 'form.type.phpcr_odm.reference_collection', 'phpcr_document' => 'form.type.phpcr.document', 'Doctrine\\Bundle\\PHPCRBundle\\Form\\Type\\DocumentType' => 'form.type.phpcr.document', 'phpcr_odm_path' => 'doctrine_phpcr.odm.form.type.path', 'Doctrine\\Bundle\\PHPCRBundle\\Form\\Type\\PathType' => 'doctrine_phpcr.odm.form.type.path', 'snippet' => 'sulu_snippet.form.snippet', 'Sulu\\Bundle\\SnippetBundle\\Form\\SnippetType' => 'sulu_snippet.form.snippet', 'document_object' => 'dtl_content.form.factory.document_type', 'Sulu\\Component\\Content\\Form\\Type\\DocumentObjectType' => 'dtl_content.form.factory.document_type', 'page' => 'dtl_content.form.type.page', 'Sulu\\Bundle\\ContentBundle\\Form\\Type\\PageDocumentType' => 'dtl_content.form.type.page', 'home' => 'dtl_content.form.type.home', 'Sulu\\Bundle\\ContentBundle\\Form\\Type\\HomeDocumentType' => 'dtl_content.form.type.home', 'cmf_routing_route_type' => 'cmf_routing.route_type_form_type', 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Form\\Type\\RouteTypeType' => 'cmf_routing.route_type_form_type'), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf', 3 => 'form.type_extension.form.data_collector'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => array(0 => 'form.type_extension.repeated.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine', 2 => 'form.type_guesser.doctrine_phpcr'))), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy A Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy instance.
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), $this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance.
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance.
     */
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance.
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance.
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), $this->get('property_accessor'))));
    }

    /**
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance.
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance.
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance.
     */
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance.
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance.
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance.
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance.
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance.
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance.
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /**
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance.
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance.
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance.
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance.
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance.
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance.
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance.
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance.
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the 'form.type.phpcr.document' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Form\Type\DocumentType A Doctrine\Bundle\PHPCRBundle\Form\Type\DocumentType instance.
     */
    protected function getForm_Type_Phpcr_DocumentService()
    {
        return $this->services['form.type.phpcr.document'] = new \Doctrine\Bundle\PHPCRBundle\Form\Type\DocumentType($this->get('doctrine_phpcr'));
    }

    /**
     * Gets the 'form.type.phpcr.reference' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Form\Type\PHPCRReferenceType A Doctrine\Bundle\PHPCRBundle\Form\Type\PHPCRReferenceType instance.
     */
    protected function getForm_Type_Phpcr_ReferenceService()
    {
        return $this->services['form.type.phpcr.reference'] = new \Doctrine\Bundle\PHPCRBundle\Form\Type\PHPCRReferenceType($this->get('doctrine_phpcr.default_session'));
    }

    /**
     * Gets the 'form.type.phpcr_odm.reference_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Form\Type\PHPCRODMReferenceCollectionType A Doctrine\Bundle\PHPCRBundle\Form\Type\PHPCRODMReferenceCollectionType instance.
     */
    protected function getForm_Type_PhpcrOdm_ReferenceCollectionService()
    {
        return $this->services['form.type.phpcr_odm.reference_collection'] = new \Doctrine\Bundle\PHPCRBundle\Form\Type\PHPCRODMReferenceCollectionType($this->get('doctrine_phpcr.odm.default_document_manager'));
    }

    /**
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance.
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the 'form.type.range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType A Symfony\Component\Form\Extension\Core\Type\RangeType instance.
     */
    protected function getForm_Type_RangeService()
    {
        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /**
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance.
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance.
     */
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance.
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance.
     */
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance.
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance.
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance.
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance.
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance.
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance.
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('security.csrf.token_manager'), true, '_token', $this->get('translator.default'), 'validators');
    }

    /**
     * Gets the 'form.type_extension.form.data_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension A Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension instance.
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        return $this->services['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension($this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance.
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(new \Symfony\Component\Form\Util\ServerParams($this->get('request_stack'))));
    }

    /**
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /**
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type_guesser.doctrine_phpcr' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Form\PhpcrOdmTypeGuesser A Doctrine\Bundle\PHPCRBundle\Form\PhpcrOdmTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_DoctrinePhpcrService()
    {
        return $this->services['form.type_guesser.doctrine_phpcr'] = new \Doctrine\Bundle\PHPCRBundle\Form\PhpcrOdmTypeGuesser($this->get('doctrine_phpcr'), array());
    }

    /**
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }

    /**
     * Gets the 'fos_rest.body_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\EventListener\BodyListener A FOS\RestBundle\EventListener\BodyListener instance.
     */
    protected function getFosRest_BodyListenerService()
    {
        $this->services['fos_rest.body_listener'] = $instance = new \FOS\RestBundle\EventListener\BodyListener($this->get('fos_rest.decoder_provider'), false);

        $instance->setDefaultFormat(NULL);

        return $instance;
    }

    /**
     * Gets the 'fos_rest.decoder.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Decoder\JsonDecoder A FOS\RestBundle\Decoder\JsonDecoder instance.
     */
    protected function getFosRest_Decoder_JsonService()
    {
        return $this->services['fos_rest.decoder.json'] = new \FOS\RestBundle\Decoder\JsonDecoder();
    }

    /**
     * Gets the 'fos_rest.decoder.jsontoform' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Decoder\JsonToFormDecoder A FOS\RestBundle\Decoder\JsonToFormDecoder instance.
     */
    protected function getFosRest_Decoder_JsontoformService()
    {
        return $this->services['fos_rest.decoder.jsontoform'] = new \FOS\RestBundle\Decoder\JsonToFormDecoder();
    }

    /**
     * Gets the 'fos_rest.decoder.xml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Decoder\XmlDecoder A FOS\RestBundle\Decoder\XmlDecoder instance.
     */
    protected function getFosRest_Decoder_XmlService()
    {
        return $this->services['fos_rest.decoder.xml'] = new \FOS\RestBundle\Decoder\XmlDecoder();
    }

    /**
     * Gets the 'fos_rest.decoder_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Decoder\ContainerDecoderProvider A FOS\RestBundle\Decoder\ContainerDecoderProvider instance.
     */
    protected function getFosRest_DecoderProviderService()
    {
        $this->services['fos_rest.decoder_provider'] = $instance = new \FOS\RestBundle\Decoder\ContainerDecoderProvider(array('json' => 'fos_rest.decoder.json', 'xml' => 'fos_rest.decoder.xml'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'fos_rest.exception_format_negotiator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Util\FormatNegotiator A FOS\RestBundle\Util\FormatNegotiator instance.
     */
    protected function getFosRest_ExceptionFormatNegotiatorService()
    {
        return $this->services['fos_rest.exception_format_negotiator'] = new \FOS\RestBundle\Util\FormatNegotiator();
    }

    /**
     * Gets the 'fos_rest.format_negotiator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Util\FormatNegotiator A FOS\RestBundle\Util\FormatNegotiator instance.
     */
    protected function getFosRest_FormatNegotiatorService()
    {
        return $this->services['fos_rest.format_negotiator'] = new \FOS\RestBundle\Util\FormatNegotiator();
    }

    /**
     * Gets the 'fos_rest.inflector.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Util\Inflector\DoctrineInflector A FOS\RestBundle\Util\Inflector\DoctrineInflector instance.
     */
    protected function getFosRest_Inflector_DoctrineService()
    {
        return $this->services['fos_rest.inflector.doctrine'] = new \FOS\RestBundle\Util\Inflector\DoctrineInflector();
    }

    /**
     * Gets the 'fos_rest.normalizer.camel_keys' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Normalizer\CamelKeysNormalizer A FOS\RestBundle\Normalizer\CamelKeysNormalizer instance.
     */
    protected function getFosRest_Normalizer_CamelKeysService()
    {
        return $this->services['fos_rest.normalizer.camel_keys'] = new \FOS\RestBundle\Normalizer\CamelKeysNormalizer();
    }

    /**
     * Gets the 'fos_rest.normalizer.camel_keys_with_leading_underscore' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore A FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore instance.
     */
    protected function getFosRest_Normalizer_CamelKeysWithLeadingUnderscoreService()
    {
        return $this->services['fos_rest.normalizer.camel_keys_with_leading_underscore'] = new \FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore();
    }

    /**
     * Gets the 'fos_rest.request.param_fetcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Request\ParamFetcher A FOS\RestBundle\Request\ParamFetcher instance.
     */
    protected function getFosRest_Request_ParamFetcherService()
    {
        return $this->services['fos_rest.request.param_fetcher'] = new \FOS\RestBundle\Request\ParamFetcher($this->get('fos_rest.request.param_fetcher.reader'), $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('fos_rest.violation_formatter'), $this->get('validator', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'fos_rest.request.param_fetcher.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Request\ParamReader A FOS\RestBundle\Request\ParamReader instance.
     */
    protected function getFosRest_Request_ParamFetcher_ReaderService()
    {
        return $this->services['fos_rest.request.param_fetcher.reader'] = new \FOS\RestBundle\Request\ParamReader($this->get('annotation_reader'));
    }

    /**
     * Gets the 'fos_rest.routing.loader.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Routing\Loader\RestRouteLoader A FOS\RestBundle\Routing\Loader\RestRouteLoader instance.
     */
    protected function getFosRest_Routing_Loader_ControllerService()
    {
        return $this->services['fos_rest.routing.loader.controller'] = new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, $this->get('file_locator'), $this->get('controller_name_converter'), $this->get('fos_rest.routing.loader.reader.controller'), 'json');
    }

    /**
     * Gets the 'fos_rest.routing.loader.processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Routing\Loader\RestRouteProcessor A FOS\RestBundle\Routing\Loader\RestRouteProcessor instance.
     */
    protected function getFosRest_Routing_Loader_ProcessorService()
    {
        return $this->services['fos_rest.routing.loader.processor'] = new \FOS\RestBundle\Routing\Loader\RestRouteProcessor();
    }

    /**
     * Gets the 'fos_rest.routing.loader.reader.action' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Routing\Loader\Reader\RestActionReader A FOS\RestBundle\Routing\Loader\Reader\RestActionReader instance.
     */
    protected function getFosRest_Routing_Loader_Reader_ActionService()
    {
        return $this->services['fos_rest.routing.loader.reader.action'] = new \FOS\RestBundle\Routing\Loader\Reader\RestActionReader($this->get('annotation_reader'), $this->get('fos_rest.request.param_fetcher.reader'), $this->get('fos_rest.inflector.doctrine'), true, array('json' => false, 'xml' => false, 'html' => true));
    }

    /**
     * Gets the 'fos_rest.routing.loader.reader.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader A FOS\RestBundle\Routing\Loader\Reader\RestControllerReader instance.
     */
    protected function getFosRest_Routing_Loader_Reader_ControllerService()
    {
        return $this->services['fos_rest.routing.loader.reader.controller'] = new \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader($this->get('fos_rest.routing.loader.reader.action'), $this->get('annotation_reader'));
    }

    /**
     * Gets the 'fos_rest.routing.loader.xml_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader A FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader instance.
     */
    protected function getFosRest_Routing_Loader_XmlCollectionService()
    {
        return $this->services['fos_rest.routing.loader.xml_collection'] = new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader($this->get('file_locator'), $this->get('fos_rest.routing.loader.processor'), true, array('json' => false, 'xml' => false, 'html' => true), 'json');
    }

    /**
     * Gets the 'fos_rest.routing.loader.yaml_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader A FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader instance.
     */
    protected function getFosRest_Routing_Loader_YamlCollectionService()
    {
        return $this->services['fos_rest.routing.loader.yaml_collection'] = new \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader($this->get('file_locator'), $this->get('fos_rest.routing.loader.processor'), true, array('json' => false, 'xml' => false, 'html' => true), 'json');
    }

    /**
     * Gets the 'fos_rest.serializer.exception_wrapper_normalizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Serializer\ExceptionWrapperNormalizer A FOS\RestBundle\Serializer\ExceptionWrapperNormalizer instance.
     */
    protected function getFosRest_Serializer_ExceptionWrapperNormalizerService()
    {
        return $this->services['fos_rest.serializer.exception_wrapper_normalizer'] = new \FOS\RestBundle\Serializer\ExceptionWrapperNormalizer($this->get('sulu_website.translator.request_analyzer'));
    }

    /**
     * Gets the 'fos_rest.serializer.exception_wrapper_serialize_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Serializer\ExceptionWrapperSerializeHandler A FOS\RestBundle\Serializer\ExceptionWrapperSerializeHandler instance.
     */
    protected function getFosRest_Serializer_ExceptionWrapperSerializeHandlerService()
    {
        return $this->services['fos_rest.serializer.exception_wrapper_serialize_handler'] = new \FOS\RestBundle\Serializer\ExceptionWrapperSerializeHandler();
    }

    /**
     * Gets the 'fos_rest.view.exception_wrapper_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\View\ExceptionWrapperHandler A FOS\RestBundle\View\ExceptionWrapperHandler instance.
     */
    protected function getFosRest_View_ExceptionWrapperHandlerService()
    {
        return $this->services['fos_rest.view.exception_wrapper_handler'] = new \FOS\RestBundle\View\ExceptionWrapperHandler();
    }

    /**
     * Gets the 'fos_rest.view_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\View\ViewHandler A FOS\RestBundle\View\ViewHandler instance.
     */
    protected function getFosRest_ViewHandlerService()
    {
        $this->services['fos_rest.view_handler'] = $instance = new \FOS\RestBundle\View\ViewHandler(array('json' => false, 'xml' => false, 'html' => true), 400, 204, false, array('html' => 302), 'twig');

        $instance->setExclusionStrategyGroups('');
        $instance->setExclusionStrategyVersion('');
        $instance->setSerializeNullStrategy(false);
        $instance->setContainer($this);
        $instance->registerHandler('csv', array(0 => $this->get('sulu_core.rest.view_handler.csv'), 1 => 'createResponse'));

        return $instance;
    }

    /**
     * Gets the 'fos_rest.violation_formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Util\ViolationFormatter A FOS\RestBundle\Util\ViolationFormatter instance.
     */
    protected function getFosRest_ViolationFormatterService()
    {
        return $this->services['fos_rest.violation_formatter'] = new \FOS\RestBundle\Util\ViolationFormatter();
    }

    /**
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler A Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler instance.
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($this, $this->get('request_stack'), true);

        $instance->addRendererService('inline', 'fragment.renderer.inline');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('esi', 'fragment.renderer.esi');
        $instance->addRendererService('ssi', 'fragment.renderer.ssi');

        return $instance;
    }

    /**
     * Gets the 'fragment.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener A Symfony\Component\HttpKernel\EventListener\FragmentListener instance.
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }

    /**
     * Gets the 'fragment.renderer.esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer instance.
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer A Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer instance.
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($this->get('twig'), $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance.
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('debug.event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.ssi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer instance.
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'hateoas.configuration.provider.resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Hateoas\Configuration\Provider\Resolver\ChainResolver A Hateoas\Configuration\Provider\Resolver\ChainResolver instance.
     */
    protected function getHateoas_Configuration_Provider_ResolverService()
    {
        return $this->services['hateoas.configuration.provider.resolver'] = new \Hateoas\Configuration\Provider\Resolver\ChainResolver(array(0 => new \Hateoas\Configuration\Provider\Resolver\MethodResolver(), 1 => new \Hateoas\Configuration\Provider\Resolver\StaticMethodResolver(), 2 => new \Hateoas\Configuration\Provider\Resolver\SymfonyContainerResolver($this)));
    }

    /**
     * Gets the 'hateoas.event_subscriber.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Hateoas\Serializer\EventSubscriber\JsonEventSubscriber A Hateoas\Serializer\EventSubscriber\JsonEventSubscriber instance.
     */
    protected function getHateoas_EventSubscriber_JsonService()
    {
        $a = $this->get('jms_serializer.metadata_factory');

        return $this->services['hateoas.event_subscriber.json'] = new \Hateoas\Serializer\EventSubscriber\JsonEventSubscriber(new \Hateoas\Serializer\JsonHalSerializer(), $this->get('hateoas.links_factory'), $this->get('hateoas.embeds_factory'), new \Hateoas\Serializer\Metadata\InlineDeferrer($a), new \Hateoas\Serializer\Metadata\InlineDeferrer($a));
    }

    /**
     * Gets the 'hateoas.event_subscriber.xml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Hateoas\Serializer\EventSubscriber\XmlEventSubscriber A Hateoas\Serializer\EventSubscriber\XmlEventSubscriber instance.
     */
    protected function getHateoas_EventSubscriber_XmlService()
    {
        $a = new \Hateoas\Serializer\XmlSerializer();
        $a->setMetadataFactory($this->get('jms_serializer.metadata_factory'));

        return $this->services['hateoas.event_subscriber.xml'] = new \Hateoas\Serializer\EventSubscriber\XmlEventSubscriber($a, $this->get('hateoas.links_factory'), $this->get('hateoas.embeds_factory'));
    }

    /**
     * Gets the 'hateoas.expression.evaluator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Hateoas\Expression\ExpressionEvaluator A Hateoas\Expression\ExpressionEvaluator instance.
     */
    protected function getHateoas_Expression_EvaluatorService()
    {
        $this->services['hateoas.expression.evaluator'] = $instance = new \Hateoas\Expression\ExpressionEvaluator($this->get('bazinga_hateoas.expression_language'));

        $instance->setContextVariable('container', $this);

        return $instance;
    }

    /**
     * Gets the 'hateoas.generator.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Hateoas\UrlGenerator\UrlGeneratorRegistry A Hateoas\UrlGenerator\UrlGeneratorRegistry instance.
     */
    protected function getHateoas_Generator_RegistryService()
    {
        return $this->services['hateoas.generator.registry'] = new \Hateoas\UrlGenerator\UrlGeneratorRegistry($this->get('hateoas.generator.symfony'));
    }

    /**
     * Gets the 'hateoas.generator.symfony' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Hateoas\UrlGenerator\SymfonyUrlGenerator A Hateoas\UrlGenerator\SymfonyUrlGenerator instance.
     */
    protected function getHateoas_Generator_SymfonyService()
    {
        return $this->services['hateoas.generator.symfony'] = new \Hateoas\UrlGenerator\SymfonyUrlGenerator($this->get('cmf_routing.router'));
    }

    /**
     * Gets the 'hateoas.serializer.exclusion_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Hateoas\Serializer\ExclusionManager A Hateoas\Serializer\ExclusionManager instance.
     */
    protected function getHateoas_Serializer_ExclusionManagerService()
    {
        return $this->services['hateoas.serializer.exclusion_manager'] = new \Hateoas\Serializer\ExclusionManager($this->get('hateoas.expression.evaluator'));
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel A Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('debug.event_dispatcher'), $this, $this->get('debug.controller_resolver'), $this->get('request_stack'), false);
    }

    /**
     * Gets the 'jms_serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Serializer A JMS\Serializer\Serializer instance.
     */
    protected function getJmsSerializerService()
    {
        $a = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher($this);
        $a->setListeners(array('serializer.post_serialize' => array(0 => array(0 => array(0 => 'sulu_core.list_builder.metadata.provider.general.event_subscriber', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 1 => array(0 => array(0 => 'hateoas.event_subscriber.xml', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'xml'), 2 => array(0 => array(0 => 'hateoas.event_subscriber.json', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 3 => array(0 => array(0 => 'sulu_security.document.serializer.subscriber.security', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 4 => array(0 => array(0 => 'sulu_content.document.serializer.subscriber.structure_behavior', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 5 => array(0 => array(0 => 'sulu_content.document.serializer.subscriber.path_behavior', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 6 => array(0 => array(0 => 'sulu_content.document.serializer.subscriber.locale', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 7 => array(0 => array(0 => 'sulu_content.document.serializer.subscriber.shadow_locale_behavior', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 8 => array(0 => array(0 => 'sulu_content.document.serializer.subscriber.redirect_type_behavior', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 9 => array(0 => array(0 => 'sulu_content.document.serializer.subscriber.workflow_stage_behavior', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 10 => array(0 => array(0 => 'sulu_document_manager.serializer.subscriber.children_behavior', 1 => 'onPostSerialize'), 1 => NULL, 2 => 'json'), 11 => array(0 => array(0 => 'sulu_hash.event_subscriber.serializer', 1 => 'onPostSerialize'), 1 => NULL, 2 => NULL), 12 => array(0 => array(0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPostSerialize'), 1 => NULL, 2 => NULL)), 'serializer.pre_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL), 1 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL), 2 => array(0 => array(0 => 'sulu_content.document.serializer.subscriber.structure_behavior', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL), 3 => array(0 => array(0 => 'sulu_content.document.serializer.subscriber.extension_container', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL), 4 => array(0 => array(0 => 'sulu_document_manager.serializer.subscriber.proxy', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL)), 'serializer.post_deserialize' => array(0 => array(0 => array(0 => 'sulu_document_manager.serializer.subscriber.document', 1 => 'onPostDeserialize'), 1 => NULL, 2 => NULL))));

        return $this->services['jms_serializer'] = new \JMS\Serializer\Serializer($this->get('jms_serializer.metadata_factory'), $this->get('jms_serializer.handler_registry'), $this->get('jms_serializer.unserialize_object_constructor'), new \PhpCollection\Map(array('array' => $this->get('sulu_core.array_serialization_visitor'), 'json' => $this->get('jms_serializer.json_serialization_visitor'), 'xml' => $this->get('jms_serializer.xml_serialization_visitor'), 'yml' => $this->get('jms_serializer.yaml_serialization_visitor'))), new \PhpCollection\Map(array('json' => $this->get('jms_serializer.json_deserialization_visitor'), 'xml' => $this->get('jms_serializer.xml_deserialization_visitor'))), $a);
    }

    /**
     * Gets the 'jms_serializer.array_collection_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\ArrayCollectionHandler A JMS\Serializer\Handler\ArrayCollectionHandler instance.
     */
    protected function getJmsSerializer_ArrayCollectionHandlerService()
    {
        return $this->services['jms_serializer.array_collection_handler'] = new \JMS\Serializer\Handler\ArrayCollectionHandler();
    }

    /**
     * Gets the 'jms_serializer.constraint_violation_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\ConstraintViolationHandler A JMS\Serializer\Handler\ConstraintViolationHandler instance.
     */
    protected function getJmsSerializer_ConstraintViolationHandlerService()
    {
        return $this->services['jms_serializer.constraint_violation_handler'] = new \JMS\Serializer\Handler\ConstraintViolationHandler();
    }

    /**
     * Gets the 'jms_serializer.datetime_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\DateHandler A JMS\Serializer\Handler\DateHandler instance.
     */
    protected function getJmsSerializer_DatetimeHandlerService()
    {
        return $this->services['jms_serializer.datetime_handler'] = new \JMS\Serializer\Handler\DateHandler('Y-m-d\\TH:i:sO', 'Asia/Karachi', true);
    }

    /**
     * Gets the 'jms_serializer.doctrine_proxy_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber A JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber instance.
     */
    protected function getJmsSerializer_DoctrineProxySubscriberService()
    {
        return $this->services['jms_serializer.doctrine_proxy_subscriber'] = new \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber();
    }

    /**
     * Gets the 'jms_serializer.form_error_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\FormErrorHandler A JMS\Serializer\Handler\FormErrorHandler instance.
     */
    protected function getJmsSerializer_FormErrorHandlerService()
    {
        return $this->services['jms_serializer.form_error_handler'] = new \JMS\Serializer\Handler\FormErrorHandler($this->get('sulu_website.translator.request_analyzer'));
    }

    /**
     * Gets the 'jms_serializer.handler_registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\LazyHandlerRegistry A JMS\Serializer\Handler\LazyHandlerRegistry instance.
     */
    protected function getJmsSerializer_HandlerRegistryService()
    {
        return $this->services['jms_serializer.handler_registry'] = new \JMS\Serializer\Handler\LazyHandlerRegistry($this, array(2 => array('DateTime' => array('array' => array(0 => 'sulu_core.rest.datetime_handler', 1 => 'deserialize'), 'json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromyml')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap')), 'Sulu\\Component\\Content\\Document\\Structure\\Structure' => array('json' => array(0 => 'sulu_content.document.serializer.handler.structure', 1 => 'doDeserialize')), 'Sulu\\Component\\Content\\Document\\Extension\\ExtensionContainer' => array('json' => array(0 => 'sulu_content.document.serializer.handler.extension_container', 1 => 'doDeserialize')), 'Sulu\\Component\\Content\\Compat\\Structure\\PageBridge' => array('json' => array(0 => 'sulu_content.compat.serializer.handler.page_bridge', 1 => 'doDeserialize'))), 1 => array('DateTime' => array('array' => array(0 => 'sulu_core.rest.datetime_handler', 1 => 'serialize'), 'json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime')), 'FOS\\RestBundle\\Util\\ExceptionWrapper' => array('json' => array(0 => 'fos_rest.serializer.exception_wrapper_serialize_handler', 1 => 'serializeToJson'), 'xml' => array(0 => 'fos_rest.serializer.exception_wrapper_serialize_handler', 1 => 'serializeToXml')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap')), 'Symfony\\Component\\Form\\Form' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToyml')), 'Symfony\\Component\\Form\\FormError' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToyml')), 'Symfony\\Component\\Validator\\ConstraintViolationList' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToyml')), 'Symfony\\Component\\Validator\\ConstraintViolation' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToyml')), 'Sulu\\Component\\Content\\Document\\Structure\\Structure' => array('json' => array(0 => 'sulu_content.document.serializer.handler.structure', 1 => 'doSerialize')), 'Sulu\\Component\\Content\\Document\\Extension\\ExtensionContainer' => array('json' => array(0 => 'sulu_content.document.serializer.handler.extension_container', 1 => 'doSerialize')), 'Sulu\\Component\\Content\\Compat\\Structure\\PageBridge' => array('json' => array(0 => 'sulu_content.compat.serializer.handler.page_bridge', 1 => 'doSerialize')), 'Sulu\\Component\\DocumentManager\\Collection\\ChildrenCollection' => array('json' => array(0 => 'sulu_document_manager.serializer.handler.children_collection', 1 => 'doSerialize')))));
    }

    /**
     * Gets the 'jms_serializer.json_deserialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\JsonDeserializationVisitor A JMS\Serializer\JsonDeserializationVisitor instance.
     */
    protected function getJmsSerializer_JsonDeserializationVisitorService()
    {
        return $this->services['jms_serializer.json_deserialization_visitor'] = new \JMS\Serializer\JsonDeserializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.unserialize_object_constructor'));
    }

    /**
     * Gets the 'jms_serializer.json_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\JsonSerializationVisitor A JMS\Serializer\JsonSerializationVisitor instance.
     */
    protected function getJmsSerializer_JsonSerializationVisitorService()
    {
        $this->services['jms_serializer.json_serialization_visitor'] = $instance = new \JMS\Serializer\JsonSerializationVisitor($this->get('jms_serializer.naming_strategy'));

        $instance->setOptions(0);

        return $instance;
    }

    /**
     * Gets the 'jms_serializer.metadata_driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Metadata\Driver\DoctrinePHPCRTypeDriver A JMS\Serializer\Metadata\Driver\DoctrinePHPCRTypeDriver instance.
     */
    protected function getJmsSerializer_MetadataDriverService()
    {
        $a = $this->get('jms_serializer.metadata.file_locator');

        return $this->services['jms_serializer.metadata_driver'] = new \JMS\Serializer\Metadata\Driver\DoctrinePHPCRTypeDriver(new \Metadata\Driver\DriverChain(array(0 => new \JMS\Serializer\Metadata\Driver\YamlDriver($a), 1 => new \JMS\Serializer\Metadata\Driver\XmlDriver($a), 2 => new \JMS\Serializer\Metadata\Driver\PhpDriver($a), 3 => new \JMS\Serializer\Metadata\Driver\AnnotationDriver($this->get('annotation_reader')))), $this->get('doctrine_phpcr'));
    }

    /**
     * Gets the 'jms_serializer.naming_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Naming\CacheNamingStrategy A JMS\Serializer\Naming\CacheNamingStrategy instance.
     */
    protected function getJmsSerializer_NamingStrategyService()
    {
        return $this->services['jms_serializer.naming_strategy'] = new \JMS\Serializer\Naming\CacheNamingStrategy(new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\IdenticalPropertyNamingStrategy()));
    }

    /**
     * Gets the 'jms_serializer.object_constructor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Construction\DoctrineObjectConstructor A JMS\Serializer\Construction\DoctrineObjectConstructor instance.
     */
    protected function getJmsSerializer_ObjectConstructorService()
    {
        return $this->services['jms_serializer.object_constructor'] = new \JMS\Serializer\Construction\DoctrineObjectConstructor($this->get('doctrine_phpcr'), $this->get('jms_serializer.unserialize_object_constructor'));
    }

    /**
     * Gets the 'jms_serializer.php_collection_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\PhpCollectionHandler A JMS\Serializer\Handler\PhpCollectionHandler instance.
     */
    protected function getJmsSerializer_PhpCollectionHandlerService()
    {
        return $this->services['jms_serializer.php_collection_handler'] = new \JMS\Serializer\Handler\PhpCollectionHandler();
    }

    /**
     * Gets the 'jms_serializer.stopwatch_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\SerializerBundle\Serializer\StopwatchEventSubscriber A JMS\SerializerBundle\Serializer\StopwatchEventSubscriber instance.
     */
    protected function getJmsSerializer_StopwatchSubscriberService()
    {
        return $this->services['jms_serializer.stopwatch_subscriber'] = new \JMS\SerializerBundle\Serializer\StopwatchEventSubscriber($this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'jms_serializer.templating.helper.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\SerializerBundle\Templating\SerializerHelper A JMS\SerializerBundle\Templating\SerializerHelper instance.
     */
    protected function getJmsSerializer_Templating_Helper_SerializerService()
    {
        return $this->services['jms_serializer.templating.helper.serializer'] = new \JMS\SerializerBundle\Templating\SerializerHelper($this->get('jms_serializer'));
    }

    /**
     * Gets the 'jms_serializer.xml_deserialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\XmlDeserializationVisitor A JMS\Serializer\XmlDeserializationVisitor instance.
     */
    protected function getJmsSerializer_XmlDeserializationVisitorService()
    {
        $this->services['jms_serializer.xml_deserialization_visitor'] = $instance = new \JMS\Serializer\XmlDeserializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.unserialize_object_constructor'));

        $instance->setDoctypeWhitelist(array());

        return $instance;
    }

    /**
     * Gets the 'jms_serializer.xml_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\XmlSerializationVisitor A JMS\Serializer\XmlSerializationVisitor instance.
     */
    protected function getJmsSerializer_XmlSerializationVisitorService()
    {
        return $this->services['jms_serializer.xml_serialization_visitor'] = new \JMS\Serializer\XmlSerializationVisitor($this->get('jms_serializer.naming_strategy'));
    }

    /**
     * Gets the 'jms_serializer.yaml_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\YamlSerializationVisitor A JMS\Serializer\YamlSerializationVisitor instance.
     */
    protected function getJmsSerializer_YamlSerializationVisitorService()
    {
        return $this->services['jms_serializer.yaml_serialization_visitor'] = new \JMS\Serializer\YamlSerializationVisitor($this->get('jms_serializer.naming_strategy'));
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'kernel.class_cache.cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer A Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer instance.
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer();
    }

    /**
     * Gets the 'liip_theme.active_theme' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ThemeBundle\ActiveTheme A Liip\ThemeBundle\ActiveTheme instance.
     */
    protected function getLiipTheme_ActiveThemeService()
    {
        return $this->services['liip_theme.active_theme'] = new \Liip\ThemeBundle\ActiveTheme('default', array(0 => 'default'), $this->get('liip_theme.theme_auto_detect'));
    }

    /**
     * Gets the 'liip_theme.theme_auto_detect' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ThemeBundle\Helper\DeviceDetection A Liip\ThemeBundle\Helper\DeviceDetection instance.
     */
    protected function getLiipTheme_ThemeAutoDetectService()
    {
        return $this->services['liip_theme.theme_auto_detect'] = new \Liip\ThemeBundle\Helper\DeviceDetection();
    }

    /**
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance.
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener($this->get('request_stack'), 'en', $this->get('cmf_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'massive_build.build.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\BuildBundle\Build\BuildRegistry A Massive\Bundle\BuildBundle\Build\BuildRegistry instance.
     */
    protected function getMassiveBuild_Build_RegistryService()
    {
        $this->services['massive_build.build.registry'] = $instance = new \Massive\Bundle\BuildBundle\Build\BuildRegistry();

        $instance->addBuilder($this->get('sulu_core.build.builder.database'));
        $instance->addBuilder($this->get('sulu_core.build.builder.phpcr'));
        $instance->addBuilder($this->get('sulu_core.build.builder.fixtures'));
        $instance->addBuilder($this->get('sulu_core.build.builder.phpcr_migrations'));
        $instance->addBuilder($this->get('sulu_core.build.builder.node_order'));
        $instance->addBuilder($this->get('sulu_search.build.index'));
        $instance->addBuilder($this->get('sulu_media.system_collections.builder'));
        $instance->addBuilder($this->get('sulu_security.build.user'));
        $instance->addBuilder($this->get('sulu.translate.build.builder.translation'));

        return $instance;
    }

    /**
     * Gets the 'massive_build.command.build' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\CoreBundle\CommandOptional\SuluBuildCommand A Sulu\Bundle\CoreBundle\CommandOptional\SuluBuildCommand instance.
     */
    protected function getMassiveBuild_Command_BuildService()
    {
        return $this->services['massive_build.command.build'] = new \Sulu\Bundle\CoreBundle\CommandOptional\SuluBuildCommand($this->get('massive_build.build.registry'), $this);
    }

    /**
     * Gets the 'massive_search.adapter.test' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Adapter\TestAdapter A Massive\Bundle\SearchBundle\Search\Adapter\TestAdapter instance.
     */
    protected function getMassiveSearch_Adapter_TestService()
    {
        return $this->services['massive_search.adapter.test'] = new \Massive\Bundle\SearchBundle\Search\Adapter\TestAdapter($this->get('sulu_search.search.factory'));
    }

    /**
     * Gets the 'massive_search.adapter.zend_lucene' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Adapter\ZendLuceneAdapter A Massive\Bundle\SearchBundle\Search\Adapter\ZendLuceneAdapter instance.
     */
    protected function getMassiveSearch_Adapter_ZendLuceneService()
    {
        return $this->services['massive_search.adapter.zend_lucene'] = new \Massive\Bundle\SearchBundle\Search\Adapter\ZendLuceneAdapter($this->get('sulu_search.search.factory'), ($this->targetDirs[3].'/data'), $this->get('filesystem'), false, 'UTF-8');
    }

    /**
     * Gets the 'massive_search.command.index_rebuild_deprecated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Command\IndexRebuildCommand A Massive\Bundle\SearchBundle\Command\IndexRebuildCommand instance.
     */
    protected function getMassiveSearch_Command_IndexRebuildDeprecatedService()
    {
        return $this->services['massive_search.command.index_rebuild_deprecated'] = new \Massive\Bundle\SearchBundle\Command\IndexRebuildCommand($this->get('massive_search.reindex.resume_manager'), $this->get('massive_search.search_manager'), $this->get('massive_search.reindex.provider_registry'), 'dev');
    }

    /**
     * Gets the 'massive_search.command.init' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Command\InitCommand A Massive\Bundle\SearchBundle\Command\InitCommand instance.
     */
    protected function getMassiveSearch_Command_InitService()
    {
        return $this->services['massive_search.command.init'] = new \Massive\Bundle\SearchBundle\Command\InitCommand($this->get('massive_search.adapter.zend_lucene'));
    }

    /**
     * Gets the 'massive_search.command.purge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Command\PurgeCommand A Massive\Bundle\SearchBundle\Command\PurgeCommand instance.
     */
    protected function getMassiveSearch_Command_PurgeService()
    {
        return $this->services['massive_search.command.purge'] = new \Massive\Bundle\SearchBundle\Command\PurgeCommand($this->get('massive_search.search_manager'));
    }

    /**
     * Gets the 'massive_search.command.query' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Command\QueryCommand A Massive\Bundle\SearchBundle\Command\QueryCommand instance.
     */
    protected function getMassiveSearch_Command_QueryService()
    {
        return $this->services['massive_search.command.query'] = new \Massive\Bundle\SearchBundle\Command\QueryCommand($this->get('massive_search.search_manager'));
    }

    /**
     * Gets the 'massive_search.command.reindex' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Command\ReindexCommand A Massive\Bundle\SearchBundle\Command\ReindexCommand instance.
     */
    protected function getMassiveSearch_Command_ReindexService()
    {
        return $this->services['massive_search.command.reindex'] = new \Massive\Bundle\SearchBundle\Command\ReindexCommand($this->get('massive_search.reindex.resume_manager'), $this->get('massive_search.search_manager'), $this->get('massive_search.reindex.provider_registry'), 'dev');
    }

    /**
     * Gets the 'massive_search.command.status' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Command\StatusCommand A Massive\Bundle\SearchBundle\Command\StatusCommand instance.
     */
    protected function getMassiveSearch_Command_StatusService()
    {
        return $this->services['massive_search.command.status'] = new \Massive\Bundle\SearchBundle\Command\StatusCommand($this->get('massive_search.search_manager'));
    }

    /**
     * Gets the 'massive_search.converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Converter\ConverterManager A Massive\Bundle\SearchBundle\Search\Converter\ConverterManager instance.
     */
    protected function getMassiveSearch_ConverterService()
    {
        $this->services['massive_search.converter'] = $instance = new \Massive\Bundle\SearchBundle\Search\Converter\ConverterManager();

        $instance->addConverter('date', $this->get('massive_search.converter.date_converter'));
        $instance->addConverter('tags', $this->get('sulu_tag.search.tags_converter'));

        return $instance;
    }

    /**
     * Gets the 'massive_search.converter.date_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Converter\Types\DateConverter A Massive\Bundle\SearchBundle\Search\Converter\Types\DateConverter instance.
     */
    protected function getMassiveSearch_Converter_DateConverterService()
    {
        return $this->services['massive_search.converter.date_converter'] = new \Massive\Bundle\SearchBundle\Search\Converter\Types\DateConverter();
    }

    /**
     * Gets the 'massive_search.events.deindex_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\EventListener\DeindexListener A Massive\Bundle\SearchBundle\Search\EventListener\DeindexListener instance.
     */
    protected function getMassiveSearch_Events_DeindexListenerService()
    {
        return $this->services['massive_search.events.deindex_listener'] = new \Massive\Bundle\SearchBundle\Search\EventListener\DeindexListener($this->get('massive_search.search_manager'));
    }

    /**
     * Gets the 'massive_search.events.index_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\EventListener\IndexListener A Massive\Bundle\SearchBundle\Search\EventListener\IndexListener instance.
     */
    protected function getMassiveSearch_Events_IndexListenerService()
    {
        return $this->services['massive_search.events.index_listener'] = new \Massive\Bundle\SearchBundle\Search\EventListener\IndexListener($this->get('massive_search.search_manager'));
    }

    /**
     * Gets the 'massive_search.events.zend_rebuild' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\EventListener\ZendRebuildSubscriber A Massive\Bundle\SearchBundle\Search\EventListener\ZendRebuildSubscriber instance.
     */
    protected function getMassiveSearch_Events_ZendRebuildService()
    {
        return $this->services['massive_search.events.zend_rebuild'] = new \Massive\Bundle\SearchBundle\Search\EventListener\ZendRebuildSubscriber($this->get('massive_search.adapter.zend_lucene'), $this->get('massive_search.prefix_decorator'));
    }

    /**
     * Gets the 'massive_search.expression_language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\ExpressionLanguage\MassiveSearchExpressionLanguage A Massive\Bundle\SearchBundle\Search\ExpressionLanguage\MassiveSearchExpressionLanguage instance.
     */
    protected function getMassiveSearch_ExpressionLanguageService()
    {
        return $this->services['massive_search.expression_language'] = new \Massive\Bundle\SearchBundle\Search\ExpressionLanguage\MassiveSearchExpressionLanguage();
    }

    /**
     * Gets the 'massive_search.factory_default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Factory A Massive\Bundle\SearchBundle\Search\Factory instance.
     */
    protected function getMassiveSearch_FactoryDefaultService()
    {
        return $this->services['massive_search.factory_default'] = new \Massive\Bundle\SearchBundle\Search\Factory();
    }

    /**
     * Gets the 'massive_search.index_name_decorator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Decorator\IndexNameDecorator A Massive\Bundle\SearchBundle\Search\Decorator\IndexNameDecorator instance.
     */
    protected function getMassiveSearch_IndexNameDecoratorService()
    {
        return $this->services['massive_search.index_name_decorator'] = new \Massive\Bundle\SearchBundle\Search\Decorator\IndexNameDecorator($this->get('massive_search.metadata.field_evaluator'));
    }

    /**
     * Gets the 'massive_search.localization_decorator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Decorator\LocalizationDecorator A Massive\Bundle\SearchBundle\Search\Decorator\LocalizationDecorator instance.
     */
    protected function getMassiveSearch_LocalizationDecoratorService()
    {
        return $this->services['massive_search.localization_decorator'] = new \Massive\Bundle\SearchBundle\Search\Decorator\LocalizationDecorator($this->get('massive_search.index_name_decorator'));
    }

    /**
     * Gets the 'massive_search.metadata.cache.file_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Metadata\Cache\FileCache A Metadata\Cache\FileCache instance.
     */
    protected function getMassiveSearch_Metadata_Cache_FileCacheService()
    {
        return $this->services['massive_search.metadata.cache.file_cache'] = new \Metadata\Cache\FileCache((__DIR__.'/massive-search'));
    }

    /**
     * Gets the 'massive_search.metadata.driver.chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Metadata\Driver\DriverChain A Metadata\Driver\DriverChain instance.
     */
    protected function getMassiveSearch_Metadata_Driver_ChainService()
    {
        return $this->services['massive_search.metadata.driver.chain'] = new \Metadata\Driver\DriverChain(array(0 => $this->get('massive_search.metadata.driver.xml')));
    }

    /**
     * Gets the 'massive_search.metadata.driver.xml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Metadata\Driver\XmlDriver A Massive\Bundle\SearchBundle\Search\Metadata\Driver\XmlDriver instance.
     */
    protected function getMassiveSearch_Metadata_Driver_XmlService()
    {
        return $this->services['massive_search.metadata.driver.xml'] = new \Massive\Bundle\SearchBundle\Search\Metadata\Driver\XmlDriver($this->get('sulu_search.search.factory'), $this->get('massive_search.metadata.file_locator'));
    }

    /**
     * Gets the 'massive_search.metadata.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Metadata\MetadataFactory A Metadata\MetadataFactory instance.
     */
    protected function getMassiveSearch_Metadata_FactoryService()
    {
        $this->services['massive_search.metadata.factory'] = $instance = new \Metadata\MetadataFactory($this->get('massive_search.metadata.driver.chain'), 'Metadata\\ClassHierarchyMetadata', true);

        $instance->setCache($this->get('massive_search.metadata.cache.file_cache'));

        return $instance;
    }

    /**
     * Gets the 'massive_search.metadata.field_evaluator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Metadata\FieldEvaluator A Massive\Bundle\SearchBundle\Search\Metadata\FieldEvaluator instance.
     */
    protected function getMassiveSearch_Metadata_FieldEvaluatorService()
    {
        return $this->services['massive_search.metadata.field_evaluator'] = new \Massive\Bundle\SearchBundle\Search\Metadata\FieldEvaluator($this->get('massive_search.expression_language'));
    }

    /**
     * Gets the 'massive_search.metadata.file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Metadata\Driver\FileLocator A Metadata\Driver\FileLocator instance.
     */
    protected function getMassiveSearch_Metadata_FileLocatorService()
    {
        return $this->services['massive_search.metadata.file_locator'] = new \Metadata\Driver\FileLocator(array('Sulu\\Bundle\\ContactBundle\\Entity' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/Resources/config/massive-search'), 'Sulu\\Bundle\\MediaBundle\\Entity' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Resources/config/massive-search'), 'Sulu\\Bundle\\CategoryBundle\\Entity' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/Resources/config/massive-search')));
    }

    /**
     * Gets the 'massive_search.metadata.provider.chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Metadata\Provider\ChainProvider A Massive\Bundle\SearchBundle\Search\Metadata\Provider\ChainProvider instance.
     */
    protected function getMassiveSearch_Metadata_Provider_ChainService()
    {
        return $this->services['massive_search.metadata.provider.chain'] = new \Massive\Bundle\SearchBundle\Search\Metadata\Provider\ChainProvider(array(0 => $this->get('massive_search.metadata.provider.default'), 1 => $this->get('sulu_content.search.metadata.provider.structure')));
    }

    /**
     * Gets the 'massive_search.metadata.provider.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Metadata\Provider\DefaultProvider A Massive\Bundle\SearchBundle\Search\Metadata\Provider\DefaultProvider instance.
     */
    protected function getMassiveSearch_Metadata_Provider_DefaultService()
    {
        return $this->services['massive_search.metadata.provider.default'] = new \Massive\Bundle\SearchBundle\Search\Metadata\Provider\DefaultProvider($this->get('massive_search.metadata.factory'));
    }

    /**
     * Gets the 'massive_search.object_to_document_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\ObjectToDocumentConverter A Massive\Bundle\SearchBundle\Search\ObjectToDocumentConverter instance.
     */
    protected function getMassiveSearch_ObjectToDocumentConverterService()
    {
        return $this->services['massive_search.object_to_document_converter'] = new \Massive\Bundle\SearchBundle\Search\ObjectToDocumentConverter($this->get('sulu_search.search.factory'), $this->get('massive_search.metadata.field_evaluator'), $this->get('massive_search.converter'));
    }

    /**
     * Gets the 'massive_search.prefix_decorator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Decorator\PrefixDecorator A Massive\Bundle\SearchBundle\Search\Decorator\PrefixDecorator instance.
     */
    protected function getMassiveSearch_PrefixDecoratorService()
    {
        return $this->services['massive_search.prefix_decorator'] = new \Massive\Bundle\SearchBundle\Search\Decorator\PrefixDecorator($this->get('massive_search.localization_decorator'), 'sulu');
    }

    /**
     * Gets the 'massive_search.reindex.provider.doctrine_orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Reindex\Provider\DoctrineOrmProvider A Massive\Bundle\SearchBundle\Search\Reindex\Provider\DoctrineOrmProvider instance.
     */
    protected function getMassiveSearch_Reindex_Provider_DoctrineOrmService()
    {
        return $this->services['massive_search.reindex.provider.doctrine_orm'] = new \Massive\Bundle\SearchBundle\Search\Reindex\Provider\DoctrineOrmProvider($this->get('doctrine.orm.default_entity_manager'), $this->get('massive_search.metadata.factory'));
    }

    /**
     * Gets the 'massive_search.reindex.provider_registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Reindex\ReindexProviderRegistry A Massive\Bundle\SearchBundle\Search\Reindex\ReindexProviderRegistry instance.
     */
    protected function getMassiveSearch_Reindex_ProviderRegistryService()
    {
        $this->services['massive_search.reindex.provider_registry'] = $instance = new \Massive\Bundle\SearchBundle\Search\Reindex\ReindexProviderRegistry();

        $instance->addProvider('doctrine_orm', $this->get('massive_search.reindex.provider.doctrine_orm'));
        $instance->addProvider('sulu_structure', $this->get('sulu_content.search.reindex.structure_provider'));

        return $instance;
    }

    /**
     * Gets the 'massive_search.reindex.resume_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Reindex\ResumeManager A Massive\Bundle\SearchBundle\Search\Reindex\ResumeManager instance.
     */
    protected function getMassiveSearch_Reindex_ResumeManagerService()
    {
        return $this->services['massive_search.reindex.resume_manager'] = new \Massive\Bundle\SearchBundle\Search\Reindex\ResumeManager();
    }

    /**
     * Gets the 'massive_search.search.event_subscriber.doctrine_orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\EventSubscriber\DoctrineOrmSubscriber A Massive\Bundle\SearchBundle\Search\EventSubscriber\DoctrineOrmSubscriber instance.
     */
    protected function getMassiveSearch_Search_EventSubscriber_DoctrineOrmService()
    {
        return $this->services['massive_search.search.event_subscriber.doctrine_orm'] = new \Massive\Bundle\SearchBundle\Search\EventSubscriber\DoctrineOrmSubscriber($this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'massive_search.search.event_subscriber.purge_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\EventSubscriber\PurgeSubscriber A Massive\Bundle\SearchBundle\Search\EventSubscriber\PurgeSubscriber instance.
     */
    protected function getMassiveSearch_Search_EventSubscriber_PurgeSubscriberService()
    {
        return $this->services['massive_search.search.event_subscriber.purge_subscriber'] = new \Massive\Bundle\SearchBundle\Search\EventSubscriber\PurgeSubscriber($this->get('massive_search.search_manager'));
    }

    /**
     * Gets the 'massive_search.search_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\SearchManager A Massive\Bundle\SearchBundle\Search\SearchManager instance.
     */
    protected function getMassiveSearch_SearchManagerService()
    {
        return $this->services['massive_search.search_manager'] = new \Massive\Bundle\SearchBundle\Search\SearchManager($this->get('massive_search.adapter.zend_lucene'), $this->get('massive_search.metadata.provider.chain'), $this->get('massive_search.object_to_document_converter'), $this->get('debug.event_dispatcher'), $this->get('massive_search.prefix_decorator'), $this->get('massive_search.metadata.field_evaluator'));
    }

    /**
     * Gets the 'monolog.handler.console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance.
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, false, array(64 => 200, 128 => 100, 32 => 300, 256 => 100));
    }

    /**
     * Gets the 'monolog.handler.console_very_verbose' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance.
     */
    protected function getMonolog_Handler_ConsoleVeryVerboseService()
    {
        return $this->services['monolog.handler.console_very_verbose'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, false, array(64 => 250, 128 => 250, 256 => 100, 32 => 300));
    }

    /**
     * Gets the 'monolog.handler.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\DebugHandler A Symfony\Bridge\Monolog\Handler\DebugHandler instance.
     */
    protected function getMonolog_Handler_DebugService()
    {
        return $this->services['monolog.handler.debug'] = new \Symfony\Bridge\Monolog\Handler\DebugHandler(100, true);
    }

    /**
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance.
     */
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\StreamHandler(($this->targetDirs[3].'/logs/website/dev/dev.log'), 100, true, NULL);
    }

    /**
     * Gets the 'monolog.logger.assetic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_AsseticService()
    {
        $this->services['monolog.logger.assetic'] = $instance = new \Symfony\Bridge\Monolog\Logger('assetic');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.console_very_verbose'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.doctrine_phpcr' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_DoctrinePhpcrService()
    {
        $this->services['monolog.logger.doctrine_phpcr'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine_phpcr');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.sulu_document_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_SuluDocumentManagerService()
    {
        $this->services['monolog.logger.sulu_document_manager'] = $instance = new \Symfony\Bridge\Monolog\Logger('sulu_document_manager');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.sululocation_geolocator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_SululocationGeolocatorService()
    {
        $this->services['monolog.logger.sululocation_geolocator'] = $instance = new \Symfony\Bridge\Monolog\Logger('sululocation_geolocator');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'phpcr_migrations.command.initialize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \DTL\Bundle\PhpcrMigrations\Command\InitializeCommand A DTL\Bundle\PhpcrMigrations\Command\InitializeCommand instance.
     */
    protected function getPhpcrMigrations_Command_InitializeService()
    {
        return $this->services['phpcr_migrations.command.initialize'] = new \DTL\Bundle\PhpcrMigrations\Command\InitializeCommand($this->get('phpcr_migrations.migrator_factory'));
    }

    /**
     * Gets the 'phpcr_migrations.command.migrate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \DTL\Bundle\PhpcrMigrations\Command\MigrateCommand A DTL\Bundle\PhpcrMigrations\Command\MigrateCommand instance.
     */
    protected function getPhpcrMigrations_Command_MigrateService()
    {
        return $this->services['phpcr_migrations.command.migrate'] = new \DTL\Bundle\PhpcrMigrations\Command\MigrateCommand($this->get('phpcr_migrations.migrator_factory'), $this);
    }

    /**
     * Gets the 'phpcr_migrations.command.status' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \DTL\Bundle\PhpcrMigrations\Command\StatusCommand A DTL\Bundle\PhpcrMigrations\Command\StatusCommand instance.
     */
    protected function getPhpcrMigrations_Command_StatusService()
    {
        return $this->services['phpcr_migrations.command.status'] = new \DTL\Bundle\PhpcrMigrations\Command\StatusCommand($this->get('phpcr_migrations.version_storage'), $this->get('phpcr_migrations.version_finder'));
    }

    /**
     * Gets the 'phpcr_migrations.migrator_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PHPCR\Migrations\MigratorFactory A PHPCR\Migrations\MigratorFactory instance.
     */
    protected function getPhpcrMigrations_MigratorFactoryService()
    {
        return $this->services['phpcr_migrations.migrator_factory'] = new \PHPCR\Migrations\MigratorFactory($this->get('phpcr_migrations.version_storage'), $this->get('phpcr_migrations.version_finder'), $this->get('doctrine_phpcr.default_session'));
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler A Symfony\Component\HttpKernel\Profiler\Profiler instance.
     */
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $c = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine'));
        $c->addLogger('default', $this->get('doctrine.dbal.logger.profiling.default'));

        $d = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $d->setKernel($b);
        }

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.__DIR__.'/profiler'), '', '', 86400), $a);

        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add($this->get('data_collector.form'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector($this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add($this->get('data_collector.router'));
        $instance->add($this->get('data_collector.translation'));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector($this->get('twig.profile')));
        $instance->add($c);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add($this->get('data_collector.dump'));
        $instance->add(new \Doctrine\Bundle\PHPCRBundle\DataCollector\PHPCRDataCollector($this->get('doctrine_phpcr')));
        $instance->add($this->get('sulu_website.data_collector.sulu_collector'));
        $instance->add($d);

        return $instance;
    }

    /**
     * Gets the 'profiler_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener A Symfony\Component\HttpKernel\EventListener\ProfilerListener instance.
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), $this->get('request_stack'), NULL, false, false);
    }

    /**
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance.
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false);
    }

    /**
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     * @throws InactiveScopeException when the 'request' service is requested while the 'request' scope is not active
     * @deprecated The "request" service is deprecated since Symfony 2.7 and will be removed in 3.0. Use the "request_stack" service instead.
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance.
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance.
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance.
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $d->addLoader(new \Symfony\Bundle\AsseticBundle\Routing\AsseticLoader($this->get('assetic.asset_manager'), array()));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        $d->addLoader($this->get('fos_rest.routing.loader.controller'));
        $d->addLoader($this->get('fos_rest.routing.loader.yaml_collection'));
        $d->addLoader($this->get('fos_rest.routing.loader.xml_collection'));
        $d->addLoader($this->get('sulu_website.routing.portal_loader'));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $d);
    }

    /**
     * Gets the 'security.csrf.token_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager A Symfony\Component\Security\Csrf\CsrfTokenManager instance.
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }

    /**
     * Gets the 'security.secure_random' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Util\SecureRandom A Symfony\Component\Security\Core\Util\SecureRandom instance.
     *
     * @deprecated The "security.secure_random" service is deprecated since Symfony 2.8 and will be removed in 3.0. Use the random_bytes() function instead.
     */
    protected function getSecurity_SecureRandomService()
    {
        @trigger_error('The "security.secure_random" service is deprecated since Symfony 2.8 and will be removed in 3.0. Use the random_bytes() function instead.', E_USER_DEPRECATED);

        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom();
    }

    /**
     * Gets the 'sensio_distribution.security_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\SecurityChecker A SensioLabs\Security\SecurityChecker instance.
     */
    protected function getSensioDistribution_SecurityCheckerService()
    {
        return $this->services['sensio_distribution.security_checker'] = new \SensioLabs\Security\SecurityChecker();
    }

    /**
     * Gets the 'sensio_distribution.security_checker.command' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\Command\SecurityCheckerCommand A SensioLabs\Security\Command\SecurityCheckerCommand instance.
     */
    protected function getSensioDistribution_SecurityChecker_CommandService()
    {
        return $this->services['sensio_distribution.security_checker.command'] = new \SensioLabs\Security\Command\SecurityCheckerCommand($this->get('sensio_distribution.security_checker'));
    }

    /**
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener instance.
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance.
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance.
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance.
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance.
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /**
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance.
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the 'sensio_framework_extra.security.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener instance.
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), NULL, NULL, NULL, NULL);
    }

    /**
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance.
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /**
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance.
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance.
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the 'session.save_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener A Symfony\Component\HttpKernel\EventListener\SaveSessionListener instance.
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance.
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance.
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance.
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance.
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the 'stof_doctrine_extensions.uploadable.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager A Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager instance.
     */
    protected function getStofDoctrineExtensions_Uploadable_ManagerService()
    {
        $a = new \Gedmo\Uploadable\UploadableListener(new \Stof\DoctrineExtensionsBundle\Uploadable\MimeTypeGuesserAdapter());
        $a->setAnnotationReader($this->get('annotation_reader'));
        $a->setDefaultFileInfoClass('Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');

        return $this->services['stof_doctrine_extensions.uploadable.manager'] = new \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager($a, 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');
    }

    /**
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance.
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the 'sulu.cache.warmer.structure' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\CoreBundle\Cache\StructureWarmer A Sulu\Bundle\CoreBundle\Cache\StructureWarmer instance.
     */
    protected function getSulu_Cache_Warmer_StructureService()
    {
        return $this->services['sulu.cache.warmer.structure'] = new \Sulu\Bundle\CoreBundle\Cache\StructureWarmer($this->get('sulu.content.structure_manager'));
    }

    /**
     * Gets the 'sulu.content.localization_finder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Compat\LocalizationFinder A Sulu\Component\Content\Compat\LocalizationFinder instance.
     */
    protected function getSulu_Content_LocalizationFinderService()
    {
        return $this->services['sulu.content.localization_finder'] = new \Sulu\Component\Content\Compat\LocalizationFinder($this->get('sulu_core.webspace.webspace_manager'));
    }

    /**
     * Gets the 'sulu.content.mapper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Mapper\ContentMapper A Sulu\Component\Content\Mapper\ContentMapper instance.
     */
    protected function getSulu_Content_MapperService()
    {
        return $this->services['sulu.content.mapper'] = new \Sulu\Component\Content\Mapper\ContentMapper($this->get('sulu_document_manager.document_manager'), $this->get('sulu_core.webspace.webspace_manager'), $this->get('form.factory'), $this->get('sulu_document_manager.document_inspector'), $this->get('sulu_document_manager.property_encoder'), $this->get('sulu.content.structure_manager'), $this->get('sulu_content.extension.manager'), $this->get('sulu.content.type_manager'), $this->get('sulu.phpcr.session'), $this->get('debug.event_dispatcher'), $this->get('sulu.content.rlp.strategy.tree'), $this->get('sulu_document_manager.namespace_registry'));
    }

    /**
     * Gets the 'sulu.content.path_cleaner' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\PHPCR\PathCleanup A Sulu\Component\PHPCR\PathCleanup instance.
     */
    protected function getSulu_Content_PathCleanerService()
    {
        return $this->services['sulu.content.path_cleaner'] = new \Sulu\Component\PHPCR\PathCleanup(array('default' => array(' ' => '-', '+' => '-', '.' => '-', '^' => '-', '~' => '-', '[' => '-', ']' => '-', '(' => '-', ')' => '-', '{' => '-', '}' => '-', 'Á' => 'A', 'á' => 'a', 'Ć' => 'C', 'ć' => 'c', 'É' => 'E', 'é' => 'e', 'Í' => 'I', 'í' => 'i', 'Ĺ' => 'L', 'ĺ' => 'l', 'Ń' => 'N', 'ń' => 'n', 'Ó' => 'O', 'ó' => 'o', 'Ő' => 'O', 'ő' => 'o', 'Ŕ' => 'R', 'ŕ' => 'r', 'Ś' => 'S', 'ś' => 's', 'Ú' => 'U', 'ú' => 'u', 'Ű' => 'U', 'ű' => 'u', 'Ý' => 'Y', 'ý' => 'y', 'Ź' => 'Z', 'ź' => 'z', 'Ă' => 'A', 'ă' => 'a', 'Ĕ' => 'E', 'ĕ' => 'e', 'Ğ' => 'G', 'ğ' => 'g', 'Ĭ' => 'I', 'ĭ' => 'i', 'Ŏ' => 'o', 'ŏ' => 'o', 'Ŭ' => 'U', 'ŭ' => 'u', 'Č' => 'C', 'č' => 'c', 'Ď' => 'D', 'Ě' => 'E', 'ě' => 'e', 'Ň' => 'N', 'ň' => 'n', 'Ř' => 'R', 'ř' => 'r', 'Š' => 'S', 'š' => 's', 'Ť' => 'T', 'Ž' => 'Z', 'ž' => 'z', 'Ç' => 'C', 'ç' => 'c', 'Ģ' => 'G', 'ģ' => 'g', 'Ķ' => 'K', 'ķ' => 'k', 'Ļ' => 'L', 'ļ' => 'l', 'Ņ' => 'N', 'ņ' => 'n', 'Ŗ' => 'R', 'ŗ' => 'r', 'Ş' => 'S', 'ş' => 's', 'Ţ' => 'T', 'ţ' => 't', 'Ä' => 'Ae', 'ä' => 'ae', 'Ë' => 'E', 'ë' => 'e', 'Ï' => 'I', 'ï' => 'i', 'Ö' => 'Oe', 'ö' => 'oe', 'Ü' => 'Ue', 'ü' => 'ue', 'Ÿ' => 'Y', 'ÿ' => 'y', 'À' => 'A', 'à' => 'a', 'È' => 'E', 'è' => 'e', 'Ì' => 'I', 'ì' => 'i', 'Ò' => 'O', 'ò' => 'o', 'Ù' => 'U', 'ù' => 'u', 'Ā' => 'A', 'ā' => 'a', 'Ē' => 'E', 'ē' => 'e', 'Ī' => 'I', 'ī' => 'i', 'Ō' => 'O', 'ō' => 'o', 'Ū' => 'U', 'ū' => 'u', 'Ą' => 'A', 'ą' => 'a', 'Ę' => 'E', 'ę' => 'e', 'Į' => 'I', 'į' => 'i', 'Ų' => 'U', 'ų' => 'u', 'Ḃ' => 'B', 'ḃ' => 'b', 'Ċ' => 'C', 'ċ' => 'c', 'Ḋ' => 'D', 'ḋ' => 'd', 'Ė' => 'E', 'ė' => 'e', 'Ḟ' => 'F', 'Ġ' => 'G', 'ġ' => 'g', 'Ḣ' => 'H', 'ḣ' => 'h', 'İ' => 'I', 'Ṁ' => 'M', 'ṁ' => 'm', 'Ṅ' => 'N', 'ṅ' => 'n', 'Ṗ' => 'P', 'ṗ' => 'p', 'Ṙ' => 'R', 'ṙ' => 'r', 'Ṡ' => 'S', 'ṡ' => 's', 'Ṫ' => 'T', 'ṫ' => 't', 'Ż' => 'Z', 'ż' => 'z', 'Ḍ' => 'D', 'ḍ' => 'd', 'Ḥ' => 'H', 'ḥ' => 'h', 'Ḳ' => 'K', 'ḳ' => 'k', 'Ḷ' => 'L', 'ḷ' => 'l', 'Ṃ' => 'M', 'ṃ' => 'm', 'Ṛ' => 'R', 'ṛ' => 'r', 'Ṣ' => 'S', 'ṣ' => 's', 'Ṭ' => 'T', 'ṭ' => 't', 'Ṿ' => 'V', 'ṿ' => 'v', 'Đ' => 'D', 'đ' => 'd', 'Ħ' => 'H', 'ħ' => 'h', 'Ŧ' => 'T', 'ŧ' => 't', 'Å' => 'A', 'å' => 'a', 'Ů' => 'U', 'ů' => 'u', 'Ł' => 'L', 'ł' => 'l', 'Ø' => 'O', 'ø' => 'o', 'Ã' => 'A', 'ã' => 'a', 'Ĩ' => 'I', 'ĩ' => 'i', 'Ñ' => 'N', 'ñ' => 'n', 'Õ' => 'O', 'õ' => 'o', 'Ũ' => 'U', 'ũ' => 'u', 'Â' => 'A', 'â' => 'a', 'Ĉ' => 'C', 'ĉ' => 'c', 'Ê' => 'E', 'ê' => 'e', 'Ĝ' => 'G', 'ĝ' => 'g', 'Ĥ' => 'H', 'ĥ' => 'h', 'Î' => 'I', 'î' => 'i', 'Ĵ' => 'J', 'ĵ' => 'j', 'Ô' => 'O', 'ô' => 'o', 'Ŝ' => 'S', 'ŝ' => 's', 'Û' => 'U', 'û' => 'u', 'Ŵ' => 'W', 'ŵ' => 'w', 'Ŷ' => 'Y', 'ŷ' => 'y', 'Æ' => 'AE', 'æ' => 'ae', 'ß' => 'ss', 'Œ' => 'OE', 'œ' => 'oe', 'Ĳ' => 'IJ', 'ª' => 'a', 'º' => 'o'), 'de' => array('&' => 'und'), 'en' => array('&' => 'and'), 'fr' => array('&' => 'et'), 'it' => array('&' => 'e'), 'nl' => array('&' => 'en'), 'es' => array('&' => 'y')));
    }

    /**
     * Gets the 'sulu.content.path_cleaner.replacer_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\CoreBundle\DataFixtures\ReplacerXmlLoader A Sulu\Bundle\CoreBundle\DataFixtures\ReplacerXmlLoader instance.
     */
    protected function getSulu_Content_PathCleaner_ReplacerLoaderService()
    {
        return $this->services['sulu.content.path_cleaner.replacer_loader'] = new \Sulu\Bundle\CoreBundle\DataFixtures\ReplacerXmlLoader($this->get('sulu.content.path_cleaner.replacer_loader.file_locator'));
    }

    /**
     * Gets the 'sulu.content.path_cleaner.replacer_loader.file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Config\FileLocator A Symfony\Component\Config\FileLocator instance.
     */
    protected function getSulu_Content_PathCleaner_ReplacerLoader_FileLocatorService()
    {
        return $this->services['sulu.content.path_cleaner.replacer_loader.file_locator'] = new \Symfony\Component\Config\FileLocator();
    }

    /**
     * Gets the 'sulu.content.query_executor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Query\ContentQueryExecutor A Sulu\Component\Content\Query\ContentQueryExecutor instance.
     */
    protected function getSulu_Content_QueryExecutorService()
    {
        return $this->services['sulu.content.query_executor'] = new \Sulu\Component\Content\Query\ContentQueryExecutor($this->get('sulu.phpcr.session'), $this->get('sulu.content.mapper'), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sulu.content.rlp.strategy.tree' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Types\Rlp\Strategy\TreeStrategy A Sulu\Component\Content\Types\Rlp\Strategy\TreeStrategy instance.
     */
    protected function getSulu_Content_Rlp_Strategy_TreeService()
    {
        $a = $this->get('sulu_document_manager.document_inspector');

        return $this->services['sulu.content.rlp.strategy.tree'] = new \Sulu\Component\Content\Types\Rlp\Strategy\TreeStrategy(new \Sulu\Component\Content\Types\Rlp\Mapper\PhpcrMapper($this->get('sulu.phpcr.session'), $this->get('sulu_document_manager.document_manager'), $a), $this->get('sulu.content.path_cleaner'), $this->get('sulu.content.structure_manager'), $this->get('sulu.content.type_manager'), $this->get('sulu.util.node_helper'), $a);
    }

    /**
     * Gets the 'sulu.content.structure_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Compat\StructureManager A Sulu\Component\Content\Compat\StructureManager instance.
     */
    protected function getSulu_Content_StructureManagerService()
    {
        return $this->services['sulu.content.structure_manager'] = new \Sulu\Component\Content\Compat\StructureManager($this->get('sulu_content.structure.factory'), $this->get('sulu_document_manager.document_inspector'), $this->get('sulu_content.compat.structure.legacy_property_factory'), array('page' => '\\Sulu\\Component\\Content\\Compat\\Structure\\PageBridge', 'home' => '\\Sulu\\Component\\Content\\Compat\\Structure\\PageBridge', 'snippet' => '\\Sulu\\Component\\Content\\Compat\\Structure\\SnippetBridge'));
    }

    /**
     * Gets the 'sulu.content.type.block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Types\BlockContentType A Sulu\Component\Content\Types\BlockContentType instance.
     */
    protected function getSulu_Content_Type_BlockService()
    {
        return $this->services['sulu.content.type.block'] = new \Sulu\Component\Content\Types\BlockContentType($this->get('sulu.content.type_manager'), 'SuluContentBundle:Template:content-types/block.html.twig', 'i18n');
    }

    /**
     * Gets the 'sulu.content.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Content\Types\Checkbox A Sulu\Bundle\ContentBundle\Content\Types\Checkbox instance.
     */
    protected function getSulu_Content_Type_CheckboxService()
    {
        return $this->services['sulu.content.type.checkbox'] = new \Sulu\Bundle\ContentBundle\Content\Types\Checkbox('SuluContentBundle:Template:content-types/checkbox.html.twig');
    }

    /**
     * Gets the 'sulu.content.type.color' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Content\Types\Color A Sulu\Bundle\ContentBundle\Content\Types\Color instance.
     */
    protected function getSulu_Content_Type_ColorService()
    {
        return $this->services['sulu.content.type.color'] = new \Sulu\Bundle\ContentBundle\Content\Types\Color('SuluContentBundle:Template:content-types/color.html.twig');
    }

    /**
     * Gets the 'sulu.content.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Content\Types\Date A Sulu\Bundle\ContentBundle\Content\Types\Date instance.
     */
    protected function getSulu_Content_Type_DateService()
    {
        return $this->services['sulu.content.type.date'] = new \Sulu\Bundle\ContentBundle\Content\Types\Date('SuluContentBundle:Template:content-types/date.html.twig');
    }

    /**
     * Gets the 'sulu.content.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Content\Types\Email A Sulu\Bundle\ContentBundle\Content\Types\Email instance.
     */
    protected function getSulu_Content_Type_EmailService()
    {
        return $this->services['sulu.content.type.email'] = new \Sulu\Bundle\ContentBundle\Content\Types\Email('SuluContentBundle:Template:content-types/email.html.twig');
    }

    /**
     * Gets the 'sulu.content.type.internal_links' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Content\Types\InternalLinks A Sulu\Bundle\ContentBundle\Content\Types\InternalLinks instance.
     */
    protected function getSulu_Content_Type_InternalLinksService()
    {
        return $this->services['sulu.content.type.internal_links'] = new \Sulu\Bundle\ContentBundle\Content\Types\InternalLinks($this->get('sulu.content.query_executor'), $this->get('sulu_content.smart_content.data_provider.content.query_builder'), $this->get('logger'), 'SuluContentBundle:Template:content-types/internal_links.html.twig');
    }

    /**
     * Gets the 'sulu.content.type.multiple_select' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Content\Types\MultipleSelect A Sulu\Bundle\ContentBundle\Content\Types\MultipleSelect instance.
     */
    protected function getSulu_Content_Type_MultipleSelectService()
    {
        return $this->services['sulu.content.type.multiple_select'] = new \Sulu\Bundle\ContentBundle\Content\Types\MultipleSelect('SuluContentBundle:Template:content-types/multiple_select.html.twig');
    }

    /**
     * Gets the 'sulu.content.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Content\Types\Password A Sulu\Bundle\ContentBundle\Content\Types\Password instance.
     */
    protected function getSulu_Content_Type_PasswordService()
    {
        return $this->services['sulu.content.type.password'] = new \Sulu\Bundle\ContentBundle\Content\Types\Password('SuluContentBundle:Template:content-types/password.html.twig');
    }

    /**
     * Gets the 'sulu.content.type.phone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Content\Types\Phone A Sulu\Bundle\ContentBundle\Content\Types\Phone instance.
     */
    protected function getSulu_Content_Type_PhoneService()
    {
        return $this->services['sulu.content.type.phone'] = new \Sulu\Bundle\ContentBundle\Content\Types\Phone('SuluContentBundle:Template:content-types/phone.html.twig');
    }

    /**
     * Gets the 'sulu.content.type.resource_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Types\ResourceLocator A Sulu\Component\Content\Types\ResourceLocator instance.
     */
    protected function getSulu_Content_Type_ResourceLocatorService()
    {
        return $this->services['sulu.content.type.resource_locator'] = new \Sulu\Component\Content\Types\ResourceLocator('SuluContentBundle:Template:content-types/resource_locator.html.twig');
    }

    /**
     * Gets the 'sulu.content.type.single_internal_link' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Content\Types\SingleInternalLink A Sulu\Bundle\ContentBundle\Content\Types\SingleInternalLink instance.
     */
    protected function getSulu_Content_Type_SingleInternalLinkService()
    {
        return $this->services['sulu.content.type.single_internal_link'] = new \Sulu\Bundle\ContentBundle\Content\Types\SingleInternalLink('SuluContentBundle:Template:content-types/single_internal_link.html.twig');
    }

    /**
     * Gets the 'sulu.content.type.single_select' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Content\Types\SingleSelect A Sulu\Bundle\ContentBundle\Content\Types\SingleSelect instance.
     */
    protected function getSulu_Content_Type_SingleSelectService()
    {
        return $this->services['sulu.content.type.single_select'] = new \Sulu\Bundle\ContentBundle\Content\Types\SingleSelect('SuluContentBundle:Template:content-types/single_select.html.twig');
    }

    /**
     * Gets the 'sulu.content.type.text_area' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Types\TextLine A Sulu\Component\Content\Types\TextLine instance.
     */
    protected function getSulu_Content_Type_TextAreaService()
    {
        return $this->services['sulu.content.type.text_area'] = new \Sulu\Component\Content\Types\TextLine('SuluContentBundle:Template:content-types/text_area.html.twig');
    }

    /**
     * Gets the 'sulu.content.type.text_editor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Types\TextEditor A Sulu\Component\Content\Types\TextEditor instance.
     */
    protected function getSulu_Content_Type_TextEditorService()
    {
        return $this->services['sulu.content.type.text_editor'] = new \Sulu\Component\Content\Types\TextEditor('SuluContentBundle:Template:content-types/text_editor.html.twig');
    }

    /**
     * Gets the 'sulu.content.type.text_line' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Types\TextLine A Sulu\Component\Content\Types\TextLine instance.
     */
    protected function getSulu_Content_Type_TextLineService()
    {
        return $this->services['sulu.content.type.text_line'] = new \Sulu\Component\Content\Types\TextLine('SuluContentBundle:Template:content-types/text_line.html.twig');
    }

    /**
     * Gets the 'sulu.content.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Content\Types\Time A Sulu\Bundle\ContentBundle\Content\Types\Time instance.
     */
    protected function getSulu_Content_Type_TimeService()
    {
        return $this->services['sulu.content.type.time'] = new \Sulu\Bundle\ContentBundle\Content\Types\Time('SuluContentBundle:Template:content-types/time.html.twig');
    }

    /**
     * Gets the 'sulu.content.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Content\Types\Url A Sulu\Bundle\ContentBundle\Content\Types\Url instance.
     */
    protected function getSulu_Content_Type_UrlService()
    {
        return $this->services['sulu.content.type.url'] = new \Sulu\Bundle\ContentBundle\Content\Types\Url('SuluContentBundle:Template:content-types/url.html.twig');
    }

    /**
     * Gets the 'sulu.content.type_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\ContentTypeManager A Sulu\Component\Content\ContentTypeManager instance.
     */
    protected function getSulu_Content_TypeManagerService()
    {
        $this->services['sulu.content.type_manager'] = $instance = new \Sulu\Component\Content\ContentTypeManager($this);

        $instance->mapAliasToServiceId('text_line', 'sulu.content.type.text_line');
        $instance->mapAliasToServiceId('text_area', 'sulu.content.type.text_area');
        $instance->mapAliasToServiceId('text_editor', 'sulu.content.type.text_editor');
        $instance->mapAliasToServiceId('resource_locator', 'sulu.content.type.resource_locator');
        $instance->mapAliasToServiceId('block', 'sulu.content.type.block');
        $instance->mapAliasToServiceId('contact', 'sulu_contact.content.contact');
        $instance->mapAliasToServiceId('media_selection', 'sulu_media.type.media_selection');
        $instance->mapAliasToServiceId('category_list', 'sulu_category.content.type.category_list');
        $instance->mapAliasToServiceId('snippet', 'sulu_snippet.content.snippet');
        $instance->mapAliasToServiceId('smart_content', 'sulu_content.smart_content.content_type');
        $instance->mapAliasToServiceId('internal_links', 'sulu.content.type.internal_links');
        $instance->mapAliasToServiceId('single_internal_link', 'sulu.content.type.single_internal_link');
        $instance->mapAliasToServiceId('phone', 'sulu.content.type.phone');
        $instance->mapAliasToServiceId('password', 'sulu.content.type.password');
        $instance->mapAliasToServiceId('url', 'sulu.content.type.url');
        $instance->mapAliasToServiceId('email', 'sulu.content.type.email');
        $instance->mapAliasToServiceId('date', 'sulu.content.type.date');
        $instance->mapAliasToServiceId('time', 'sulu.content.type.time');
        $instance->mapAliasToServiceId('color', 'sulu.content.type.color');
        $instance->mapAliasToServiceId('checkbox', 'sulu.content.type.checkbox');
        $instance->mapAliasToServiceId('multiple_select', 'sulu.content.type.multiple_select');
        $instance->mapAliasToServiceId('single_select', 'sulu.content.type.single_select');
        $instance->mapAliasToServiceId('tag_list', 'sulu_tag.content.type.tag_list');
        $instance->mapAliasToServiceId('location', 'sulu_location.content.type.location');

        return $instance;
    }

    /**
     * Gets the 'sulu.content.webspace_structure_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Webspace\StructureProvider\WebspaceStructureProvider A Sulu\Component\Webspace\StructureProvider\WebspaceStructureProvider instance.
     */
    protected function getSulu_Content_WebspaceStructureProviderService()
    {
        return $this->services['sulu.content.webspace_structure_provider'] = new \Sulu\Component\Webspace\StructureProvider\WebspaceStructureProvider($this->get('twig'), $this->get('sulu.content.structure_manager'), $this->get('sulu_core.webspace.webspace_manager'), $this->get('liip_theme.active_theme'), $this->get('sulu.content.webspace_structure_provider.cache'));
    }

    /**
     * Gets the 'sulu.content.webspace_structure_provider.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\FilesystemCache A Doctrine\Common\Cache\FilesystemCache instance.
     */
    protected function getSulu_Content_WebspaceStructureProvider_CacheService()
    {
        return $this->services['sulu.content.webspace_structure_provider.cache'] = new \Doctrine\Common\Cache\FilesystemCache((__DIR__.'/sulu/webspace_structures'));
    }

    /**
     * Gets the 'sulu.core.localization_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Localization\Manager\LocalizationManager A Sulu\Component\Localization\Manager\LocalizationManager instance.
     */
    protected function getSulu_Core_LocalizationManagerService()
    {
        $this->services['sulu.core.localization_manager'] = $instance = new \Sulu\Component\Localization\Manager\LocalizationManager();

        $instance->addLocalizationProvider(new \Sulu\Component\Webspace\Manager\WebspaceManager($this->get('sulu_core.webspace.loader.xml'), $this->get('sulu_core.webspace.webspace_manager.url_replacer'), $this->get('logger'), array('config_dir' => ($this->targetDirs[3].'/Resources/webspaces'), 'cache_dir' => (__DIR__.'/sulu'), 'debug' => true, 'cache_class' => 'WebspaceCollectionCache', 'base_class' => 'WebspaceCollection')));
        $instance->addLocalizationProvider(new \Sulu\Component\Localization\Provider\LocalizationProvider(array(0 => 'de', 1 => 'en', 2 => 'fr')));

        return $instance;
    }

    /**
     * Gets the 'sulu.core.localization_manager.core_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Localization\Provider\LocalizationProvider A Sulu\Component\Localization\Provider\LocalizationProvider instance.
     */
    protected function getSulu_Core_LocalizationManager_CoreProviderService()
    {
        return $this->services['sulu.core.localization_manager.core_provider'] = new \Sulu\Component\Localization\Provider\LocalizationProvider(array(0 => 'de', 1 => 'en', 2 => 'fr'));
    }

    /**
     * Gets the 'sulu.persistence.event_subscriber.orm.metadata' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Persistence\EventSubscriber\ORM\MetadataSubscriber A Sulu\Component\Persistence\EventSubscriber\ORM\MetadataSubscriber instance.
     */
    protected function getSulu_Persistence_EventSubscriber_Orm_MetadataService()
    {
        return $this->services['sulu.persistence.event_subscriber.orm.metadata'] = new \Sulu\Component\Persistence\EventSubscriber\ORM\MetadataSubscriber(array('sulu' => array('user' => array('model' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\User', 'repository' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\UserRepository'), 'role' => array('model' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role', 'repository' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\RoleRepository'), 'access_control' => array('model' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\AccessControl', 'repository' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\AccessControlRepository'), 'contact' => array('model' => 'Sulu\\Bundle\\ContactBundle\\Entity\\Contact', 'repository' => 'Sulu\\Bundle\\ContactBundle\\Entity\\ContactRepository'))));
    }

    /**
     * Gets the 'sulu.persistence.event_subscriber.orm.timestampable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Persistence\EventSubscriber\ORM\TimestampableSubscriber A Sulu\Component\Persistence\EventSubscriber\ORM\TimestampableSubscriber instance.
     */
    protected function getSulu_Persistence_EventSubscriber_Orm_TimestampableService()
    {
        return $this->services['sulu.persistence.event_subscriber.orm.timestampable'] = new \Sulu\Component\Persistence\EventSubscriber\ORM\TimestampableSubscriber();
    }

    /**
     * Gets the 'sulu.persistence.event_subscriber.orm.user_blame' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Persistence\EventSubscriber\ORM\UserBlameSubscriber A Sulu\Component\Persistence\EventSubscriber\ORM\UserBlameSubscriber instance.
     */
    protected function getSulu_Persistence_EventSubscriber_Orm_UserBlameService()
    {
        return $this->services['sulu.persistence.event_subscriber.orm.user_blame'] = new \Sulu\Component\Persistence\EventSubscriber\ORM\UserBlameSubscriber(NULL, 'Sulu\\Bundle\\SecurityBundle\\Entity\\User');
    }

    /**
     * Gets the 'sulu.phpcr.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\PHPCR\SessionManager\SessionManager A Sulu\Component\PHPCR\SessionManager\SessionManager instance.
     */
    protected function getSulu_Phpcr_SessionService()
    {
        return $this->services['sulu.phpcr.session'] = new \Sulu\Component\PHPCR\SessionManager\SessionManager($this->get('doctrine_phpcr.default_session'), array('base' => 'cmf', 'content' => 'contents', 'route' => 'routes', 'snippet' => 'snippets'));
    }

    /**
     * Gets the 'sulu.repository.access_control' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Entity\AccessControlRepository A Sulu\Bundle\SecurityBundle\Entity\AccessControlRepository instance.
     */
    protected function getSulu_Repository_AccessControlService()
    {
        $a = $this->get('doctrine.orm.default_entity_manager');

        return $this->services['sulu.repository.access_control'] = new \Sulu\Bundle\SecurityBundle\Entity\AccessControlRepository($a, $a->getClassMetadata('Sulu\\Bundle\\SecurityBundle\\Entity\\AccessControl'));
    }

    /**
     * Gets the 'sulu.repository.contact' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContactBundle\Entity\ContactRepository A Sulu\Bundle\ContactBundle\Entity\ContactRepository instance.
     */
    protected function getSulu_Repository_ContactService()
    {
        $a = $this->get('doctrine.orm.default_entity_manager');

        return $this->services['sulu.repository.contact'] = new \Sulu\Bundle\ContactBundle\Entity\ContactRepository($a, $a->getClassMetadata('Sulu\\Bundle\\ContactBundle\\Entity\\Contact'));
    }

    /**
     * Gets the 'sulu.repository.role' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Entity\RoleRepository A Sulu\Bundle\SecurityBundle\Entity\RoleRepository instance.
     */
    protected function getSulu_Repository_RoleService()
    {
        $a = $this->get('doctrine.orm.default_entity_manager');

        return $this->services['sulu.repository.role'] = new \Sulu\Bundle\SecurityBundle\Entity\RoleRepository($a, $a->getClassMetadata('Sulu\\Bundle\\SecurityBundle\\Entity\\Role'));
    }

    /**
     * Gets the 'sulu.repository.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Entity\UserRepository A Sulu\Bundle\SecurityBundle\Entity\UserRepository instance.
     */
    protected function getSulu_Repository_UserService()
    {
        $a = $this->get('doctrine.orm.default_entity_manager');

        return $this->services['sulu.repository.user'] = new \Sulu\Bundle\SecurityBundle\Entity\UserRepository($a, $a->getClassMetadata('Sulu\\Bundle\\SecurityBundle\\Entity\\User'));
    }

    /**
     * Gets the 'sulu.translate.build.builder.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\TranslateBundle\Build\TranslationBuilder A Sulu\Bundle\TranslateBundle\Build\TranslationBuilder instance.
     */
    protected function getSulu_Translate_Build_Builder_TranslationService()
    {
        return $this->services['sulu.translate.build.builder.translation'] = new \Sulu\Bundle\TranslateBundle\Build\TranslationBuilder(array(0 => 'de', 1 => 'en', 2 => 'fr'));
    }

    /**
     * Gets the 'sulu.util.node_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Util\SuluNodeHelper A Sulu\Component\Util\SuluNodeHelper instance.
     */
    protected function getSulu_Util_NodeHelperService()
    {
        return $this->services['sulu.util.node_helper'] = new \Sulu\Component\Util\SuluNodeHelper($this->get('doctrine_phpcr.default_session'), 'i18n', array('base' => 'cmf', 'content' => 'contents', 'route' => 'routes', 'snippet' => 'snippets'));
    }

    /**
     * Gets the 'sulu_category.category_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\CategoryBundle\Category\CategoryManager A Sulu\Bundle\CategoryBundle\Category\CategoryManager instance.
     */
    protected function getSuluCategory_CategoryManagerService()
    {
        return $this->services['sulu_category.category_manager'] = new \Sulu\Bundle\CategoryBundle\Category\CategoryManager($this->get('sulu_category.category_repository'), $this->get('sulu.repository.user'), $this->get('sulu_category.keyword_manager'), $this->get('doctrine.orm.default_entity_manager'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'sulu_category.category_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\CategoryBundle\Entity\CategoryRepository A Sulu\Bundle\CategoryBundle\Entity\CategoryRepository instance.
     */
    protected function getSuluCategory_CategoryRepositoryService()
    {
        return $this->services['sulu_category.category_repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('SuluCategoryBundle:Category');
    }

    /**
     * Gets the 'sulu_category.category_request_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Category\Request\CategoryRequestHandler A Sulu\Component\Category\Request\CategoryRequestHandler instance.
     */
    protected function getSuluCategory_CategoryRequestHandlerService()
    {
        return $this->services['sulu_category.category_request_handler'] = new \Sulu\Component\Category\Request\CategoryRequestHandler($this->get('request_stack'));
    }

    /**
     * Gets the 'sulu_category.content.type.category_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\CategoryBundle\Content\Types\CategoryList A Sulu\Bundle\CategoryBundle\Content\Types\CategoryList instance.
     */
    protected function getSuluCategory_Content_Type_CategoryListService()
    {
        return $this->services['sulu_category.content.type.category_list'] = new \Sulu\Bundle\CategoryBundle\Content\Types\CategoryList($this->get('sulu_category.category_manager'), 'SuluCategoryBundle:Template:content-types/category_list.html.twig');
    }

    /**
     * Gets the 'sulu_category.keyword_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\CategoryBundle\Category\KeywordManager A Sulu\Bundle\CategoryBundle\Category\KeywordManager instance.
     */
    protected function getSuluCategory_KeywordManagerService()
    {
        return $this->services['sulu_category.keyword_manager'] = new \Sulu\Bundle\CategoryBundle\Category\KeywordManager($this->get('sulu_category.keyword_repository'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'sulu_category.keyword_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\CategoryBundle\Entity\KeywordRepository A Sulu\Bundle\CategoryBundle\Entity\KeywordRepository instance.
     */
    protected function getSuluCategory_KeywordRepositoryService()
    {
        return $this->services['sulu_category.keyword_repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('SuluCategoryBundle:Keyword');
    }

    /**
     * Gets the 'sulu_category.twig_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\CategoryBundle\Twig\CategoryTwigExtension A Sulu\Bundle\CategoryBundle\Twig\CategoryTwigExtension instance.
     */
    protected function getSuluCategory_TwigExtensionService()
    {
        return $this->services['sulu_category.twig_extension'] = new \Sulu\Bundle\CategoryBundle\Twig\CategoryTwigExtension($this->get('sulu_category.category_manager'), $this->get('sulu_category.category_request_handler'), $this->get('jms_serializer'), $this->get('sulu_core.cache.memoize'));
    }

    /**
     * Gets the 'sulu_contact.account_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContactBundle\Contact\AccountFactory A Sulu\Bundle\ContactBundle\Contact\AccountFactory instance.
     */
    protected function getSuluContact_AccountFactoryService()
    {
        return $this->services['sulu_contact.account_factory'] = new \Sulu\Bundle\ContactBundle\Contact\AccountFactory();
    }

    /**
     * Gets the 'sulu_contact.account_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContactBundle\EventListener\AccountListener A Sulu\Bundle\ContactBundle\EventListener\AccountListener instance.
     */
    protected function getSuluContact_AccountListenerService()
    {
        return $this->services['sulu_contact.account_listener'] = new \Sulu\Bundle\ContactBundle\EventListener\AccountListener();
    }

    /**
     * Gets the 'sulu_contact.account_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContactBundle\Contact\AccountManager A Sulu\Bundle\ContactBundle\Contact\AccountManager instance.
     */
    protected function getSuluContact_AccountManagerService()
    {
        return $this->services['sulu_contact.account_manager'] = new \Sulu\Bundle\ContactBundle\Contact\AccountManager($this->get('doctrine.orm.default_entity_manager'), $this->get('sulu_tag.tag_manager'), $this->get('sulu_media.media_manager'), $this->get('sulu_contact.account_factory'), $this->get('sulu_contact.account_repository'), $this->get('sulu.repository.contact'), 'SuluContactBundle:Account');
    }

    /**
     * Gets the 'sulu_contact.account_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContactBundle\Entity\AccountRepository A Sulu\Bundle\ContactBundle\Entity\AccountRepository instance.
     */
    protected function getSuluContact_AccountRepositoryService()
    {
        return $this->services['sulu_contact.account_repository'] = $this->get('doctrine')->getRepository('SuluContactBundle:Account');
    }

    /**
     * Gets the 'sulu_contact.contact_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContactBundle\Contact\ContactManager A Sulu\Bundle\ContactBundle\Contact\ContactManager instance.
     */
    protected function getSuluContact_ContactManagerService()
    {
        return $this->services['sulu_contact.contact_manager'] = new \Sulu\Bundle\ContactBundle\Contact\ContactManager($this->get('doctrine.orm.default_entity_manager'), $this->get('sulu_tag.tag_manager'), $this->get('sulu_media.media_manager'), $this->get('sulu_contact.account_repository'), $this->get('sulu_contact.contact_title_repository'), $this->get('sulu.repository.contact'), 'SuluContactBundle:Account');
    }

    /**
     * Gets the 'sulu_contact.contact_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContactBundle\Entity\ContactRepository A Sulu\Bundle\ContactBundle\Entity\ContactRepository instance.
     */
    protected function getSuluContact_ContactRepositoryService()
    {
        return $this->services['sulu_contact.contact_repository'] = $this->get('doctrine')->getRepository('SuluContactBundle:Contact');
    }

    /**
     * Gets the 'sulu_contact.contact_title_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContactBundle\Entity\ContactTitleRepository A Sulu\Bundle\ContactBundle\Entity\ContactTitleRepository instance.
     */
    protected function getSuluContact_ContactTitleRepositoryService()
    {
        return $this->services['sulu_contact.contact_title_repository'] = $this->get('doctrine')->getRepository('SuluContactBundle:ContactTitle');
    }

    /**
     * Gets the 'sulu_contact.content.contact' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContactBundle\Content\Types\ContactSelectionContentType A Sulu\Bundle\ContactBundle\Content\Types\ContactSelectionContentType instance.
     */
    protected function getSuluContact_Content_ContactService()
    {
        return $this->services['sulu_contact.content.contact'] = new \Sulu\Bundle\ContactBundle\Content\Types\ContactSelectionContentType('SuluContactBundle:Template:content-types/contact-selection.html.twig', $this->get('sulu_contact.contact_manager'), $this->get('sulu_contact.account_manager'), $this->get('jms_serializer'), $this->get('sulu_contact.util.id_converter'), $this->get('sulu_contact.util.index_comparator'));
    }

    /**
     * Gets the 'sulu_contact.country_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Persistence\Repository\ORM\EntityRepository A Sulu\Component\Persistence\Repository\ORM\EntityRepository instance.
     */
    protected function getSuluContact_CountryRepositoryService()
    {
        return $this->services['sulu_contact.country_repository'] = $this->get('doctrine')->getRepository('SuluContactBundle:Country');
    }

    /**
     * Gets the 'sulu_contact.customer_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContactBundle\Contact\CustomerManager A Sulu\Bundle\ContactBundle\Contact\CustomerManager instance.
     */
    protected function getSuluContact_CustomerManagerService()
    {
        return $this->services['sulu_contact.customer_manager'] = new \Sulu\Bundle\ContactBundle\Contact\CustomerManager($this->get('doctrine.orm.default_entity_manager'), $this->get('sulu_contact.util.id_converter'), $this->get('sulu_contact.util.index_comparator'), 'SuluContactBundle:Contact', 'SuluContactBundle:Account');
    }

    /**
     * Gets the 'sulu_contact.js_config' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContactBundle\Admin\JsConfigAvatarCollection A Sulu\Bundle\ContactBundle\Admin\JsConfigAvatarCollection instance.
     */
    protected function getSuluContact_JsConfigService()
    {
        return $this->services['sulu_contact.js_config'] = new \Sulu\Bundle\ContactBundle\Admin\JsConfigAvatarCollection($this->get('sulu_media.system_collections.manager'));
    }

    /**
     * Gets the 'sulu_contact.smart_content.data_provider.account' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Contact\SmartContent\AccountDataProvider A Sulu\Component\Contact\SmartContent\AccountDataProvider instance.
     */
    protected function getSuluContact_SmartContent_DataProvider_AccountService()
    {
        return $this->services['sulu_contact.smart_content.data_provider.account'] = new \Sulu\Component\Contact\SmartContent\AccountDataProvider($this->get('sulu_contact.account_manager'), $this->get('jms_serializer'));
    }

    /**
     * Gets the 'sulu_contact.smart_content.data_provider.contact' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Contact\SmartContent\ContactDataProvider A Sulu\Component\Contact\SmartContent\ContactDataProvider instance.
     */
    protected function getSuluContact_SmartContent_DataProvider_ContactService()
    {
        return $this->services['sulu_contact.smart_content.data_provider.contact'] = new \Sulu\Component\Contact\SmartContent\ContactDataProvider($this->get('sulu_contact.contact_manager'), $this->get('jms_serializer'));
    }

    /**
     * Gets the 'sulu_contact.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContactBundle\Twig\ContactTwigExtension A Sulu\Bundle\ContactBundle\Twig\ContactTwigExtension instance.
     */
    protected function getSuluContact_TwigService()
    {
        return $this->services['sulu_contact.twig'] = new \Sulu\Bundle\ContactBundle\Twig\ContactTwigExtension($this->get('sulu_contact.twig.cache'), $this->get('sulu.repository.contact'));
    }

    /**
     * Gets the 'sulu_contact.twig.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getSuluContact_Twig_CacheService()
    {
        return $this->services['sulu_contact.twig.cache'] = new \Doctrine\Common\Cache\ArrayCache();
    }

    /**
     * Gets the 'sulu_content.compat.serializer.handler.page_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Compat\Serializer\PageBridgeHandler A Sulu\Component\Content\Compat\Serializer\PageBridgeHandler instance.
     */
    protected function getSuluContent_Compat_Serializer_Handler_PageBridgeService()
    {
        return $this->services['sulu_content.compat.serializer.handler.page_bridge'] = new \Sulu\Component\Content\Compat\Serializer\PageBridgeHandler($this->get('sulu_document_manager.document_inspector'), $this->get('sulu_content.compat.structure.legacy_property_factory'), $this->get('sulu_content.structure.factory'));
    }

    /**
     * Gets the 'sulu_content.compat.structure.legacy_property_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Compat\Structure\LegacyPropertyFactory A Sulu\Component\Content\Compat\Structure\LegacyPropertyFactory instance.
     */
    protected function getSuluContent_Compat_Structure_LegacyPropertyFactoryService()
    {
        return $this->services['sulu_content.compat.structure.legacy_property_factory'] = new \Sulu\Component\Content\Compat\Structure\LegacyPropertyFactory($this->get('sulu_document_manager.namespace_registry'));
    }

    /**
     * Gets the 'sulu_content.content_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Repository\ContentRepository A Sulu\Component\Content\Repository\ContentRepository instance.
     */
    protected function getSuluContent_ContentRepositoryService()
    {
        return $this->services['sulu_content.content_repository'] = new \Sulu\Component\Content\Repository\ContentRepository($this->get('sulu.phpcr.session'), $this->get('sulu_document_manager.property_encoder'), $this->get('sulu_core.webspace.webspace_manager'), $this->get('sulu.content.localization_finder'), $this->get('sulu.content.structure_manager'), $this->get('sulu.util.node_helper'));
    }

    /**
     * Gets the 'sulu_content.document.serializer.handler.extension_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Serializer\Handler\ExtensionContainerHandler A Sulu\Bundle\ContentBundle\Serializer\Handler\ExtensionContainerHandler instance.
     */
    protected function getSuluContent_Document_Serializer_Handler_ExtensionContainerService()
    {
        return $this->services['sulu_content.document.serializer.handler.extension_container'] = new \Sulu\Bundle\ContentBundle\Serializer\Handler\ExtensionContainerHandler();
    }

    /**
     * Gets the 'sulu_content.document.serializer.handler.structure' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Serializer\Handler\StructureHandler A Sulu\Bundle\ContentBundle\Serializer\Handler\StructureHandler instance.
     */
    protected function getSuluContent_Document_Serializer_Handler_StructureService()
    {
        return $this->services['sulu_content.document.serializer.handler.structure'] = new \Sulu\Bundle\ContentBundle\Serializer\Handler\StructureHandler();
    }

    /**
     * Gets the 'sulu_content.document.serializer.subscriber.extension_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Serializer\Subscriber\ExtensionContainerSubscriber A Sulu\Bundle\ContentBundle\Serializer\Subscriber\ExtensionContainerSubscriber instance.
     */
    protected function getSuluContent_Document_Serializer_Subscriber_ExtensionContainerService()
    {
        return $this->services['sulu_content.document.serializer.subscriber.extension_container'] = new \Sulu\Bundle\ContentBundle\Serializer\Subscriber\ExtensionContainerSubscriber();
    }

    /**
     * Gets the 'sulu_content.document.serializer.subscriber.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Serializer\Subscriber\LocaleSubscriber A Sulu\Bundle\ContentBundle\Serializer\Subscriber\LocaleSubscriber instance.
     */
    protected function getSuluContent_Document_Serializer_Subscriber_LocaleService()
    {
        return $this->services['sulu_content.document.serializer.subscriber.locale'] = new \Sulu\Bundle\ContentBundle\Serializer\Subscriber\LocaleSubscriber($this->get('sulu_document_manager.document_inspector'), $this->get('sulu_document_manager.document_registry'));
    }

    /**
     * Gets the 'sulu_content.document.serializer.subscriber.path_behavior' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Serializer\Subscriber\PathSubscriber A Sulu\Bundle\ContentBundle\Serializer\Subscriber\PathSubscriber instance.
     */
    protected function getSuluContent_Document_Serializer_Subscriber_PathBehaviorService()
    {
        return $this->services['sulu_content.document.serializer.subscriber.path_behavior'] = new \Sulu\Bundle\ContentBundle\Serializer\Subscriber\PathSubscriber($this->get('sulu_document_manager.document_inspector'), $this->get('sulu_document_manager.document_registry'));
    }

    /**
     * Gets the 'sulu_content.document.serializer.subscriber.redirect_type_behavior' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Serializer\Subscriber\RedirectTypeSubscriber A Sulu\Bundle\ContentBundle\Serializer\Subscriber\RedirectTypeSubscriber instance.
     */
    protected function getSuluContent_Document_Serializer_Subscriber_RedirectTypeBehaviorService()
    {
        return $this->services['sulu_content.document.serializer.subscriber.redirect_type_behavior'] = new \Sulu\Bundle\ContentBundle\Serializer\Subscriber\RedirectTypeSubscriber();
    }

    /**
     * Gets the 'sulu_content.document.serializer.subscriber.shadow_locale_behavior' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Serializer\Subscriber\ShadowLocaleSubscriber A Sulu\Bundle\ContentBundle\Serializer\Subscriber\ShadowLocaleSubscriber instance.
     */
    protected function getSuluContent_Document_Serializer_Subscriber_ShadowLocaleBehaviorService()
    {
        return $this->services['sulu_content.document.serializer.subscriber.shadow_locale_behavior'] = new \Sulu\Bundle\ContentBundle\Serializer\Subscriber\ShadowLocaleSubscriber($this->get('sulu_document_manager.document_inspector'), $this->get('sulu_document_manager.document_registry'));
    }

    /**
     * Gets the 'sulu_content.document.serializer.subscriber.structure_behavior' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Serializer\Subscriber\StructureSubscriber A Sulu\Bundle\ContentBundle\Serializer\Subscriber\StructureSubscriber instance.
     */
    protected function getSuluContent_Document_Serializer_Subscriber_StructureBehaviorService()
    {
        return $this->services['sulu_content.document.serializer.subscriber.structure_behavior'] = new \Sulu\Bundle\ContentBundle\Serializer\Subscriber\StructureSubscriber($this->get('sulu_document_manager.document_inspector'));
    }

    /**
     * Gets the 'sulu_content.document.serializer.subscriber.workflow_stage_behavior' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Serializer\Subscriber\WorkflowStageSubscriber A Sulu\Bundle\ContentBundle\Serializer\Subscriber\WorkflowStageSubscriber instance.
     */
    protected function getSuluContent_Document_Serializer_Subscriber_WorkflowStageBehaviorService()
    {
        return $this->services['sulu_content.document.serializer.subscriber.workflow_stage_behavior'] = new \Sulu\Bundle\ContentBundle\Serializer\Subscriber\WorkflowStageSubscriber();
    }

    /**
     * Gets the 'sulu_content.document.subscriber.content' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\StructureSubscriber A Sulu\Component\Content\Document\Subscriber\StructureSubscriber instance.
     */
    protected function getSuluContent_Document_Subscriber_ContentService()
    {
        return $this->services['sulu_content.document.subscriber.content'] = new \Sulu\Component\Content\Document\Subscriber\StructureSubscriber($this->get('sulu_document_manager.property_encoder'), $this->get('sulu.content.type_manager'), $this->get('sulu_document_manager.document_inspector'), $this->get('sulu_content.compat.structure.legacy_property_factory'));
    }

    /**
     * Gets the 'sulu_content.document_manager.content_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\DocumentManager\ContentInitializer A Sulu\Bundle\ContentBundle\DocumentManager\ContentInitializer instance.
     */
    protected function getSuluContent_DocumentManager_ContentInitializerService()
    {
        return $this->services['sulu_content.document_manager.content_initializer'] = new \Sulu\Bundle\ContentBundle\DocumentManager\ContentInitializer($this->get('doctrine_phpcr'), 'i18n');
    }

    /**
     * Gets the 'sulu_content.extension.excerpt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Content\Structure\ExcerptStructureExtension A Sulu\Bundle\ContentBundle\Content\Structure\ExcerptStructureExtension instance.
     */
    protected function getSuluContent_Extension_ExcerptService()
    {
        return $this->services['sulu_content.extension.excerpt'] = new \Sulu\Bundle\ContentBundle\Content\Structure\ExcerptStructureExtension($this->get('sulu.content.structure_manager'), $this->get('sulu.content.type_manager'), $this->get('sulu_search.search.factory'));
    }

    /**
     * Gets the 'sulu_content.extension.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Extension\ExtensionManager A Sulu\Component\Content\Extension\ExtensionManager instance.
     */
    protected function getSuluContent_Extension_ManagerService()
    {
        $this->services['sulu_content.extension.manager'] = $instance = new \Sulu\Component\Content\Extension\ExtensionManager();

        $instance->addExtension($this->get('sulu_content.extension.seo'));
        $instance->addExtension($this->get('sulu_content.extension.excerpt'));

        return $instance;
    }

    /**
     * Gets the 'sulu_content.extension.seo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Content\Structure\SeoStructureExtension A Sulu\Bundle\ContentBundle\Content\Structure\SeoStructureExtension instance.
     */
    protected function getSuluContent_Extension_SeoService()
    {
        return $this->services['sulu_content.extension.seo'] = new \Sulu\Bundle\ContentBundle\Content\Structure\SeoStructureExtension();
    }

    /**
     * Gets the 'sulu_content.jsconfig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\AdminBundle\Admin\JsConfig A Sulu\Bundle\AdminBundle\Admin\JsConfig instance.
     */
    protected function getSuluContent_JsconfigService()
    {
        return $this->services['sulu_content.jsconfig'] = new \Sulu\Bundle\AdminBundle\Admin\JsConfig('sulu-content', array('locales' => $this->get("sulu_core.webspace.webspace_manager")->getAllLocalizations()));
    }

    /**
     * Gets the 'sulu_content.jsconfig.apps' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsocketBundle\Admin\AppJsConfig A Sulu\Bundle\WebsocketBundle\Admin\AppJsConfig instance.
     */
    protected function getSuluContent_Jsconfig_AppsService()
    {
        return $this->services['sulu_content.jsconfig.apps'] = new \Sulu\Bundle\WebsocketBundle\Admin\AppJsConfig($this->get('sulu_websocket.manager'));
    }

    /**
     * Gets the 'sulu_content.jsconfig.preview' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\AdminBundle\Admin\JsConfig A Sulu\Bundle\AdminBundle\Admin\JsConfig instance.
     */
    protected function getSuluContent_Jsconfig_PreviewService()
    {
        return $this->services['sulu_content.jsconfig.preview'] = new \Sulu\Bundle\AdminBundle\Admin\JsConfig('sulu.content.preview', array('mode' => 'auto', 'websocket' => false, 'delay' => 200));
    }

    /**
     * Gets the 'sulu_content.jsconfig.server' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\AdminBundle\Admin\JsConfig A Sulu\Bundle\AdminBundle\Admin\JsConfig instance.
     */
    protected function getSuluContent_Jsconfig_ServerService()
    {
        return $this->services['sulu_content.jsconfig.server'] = new \Sulu\Bundle\AdminBundle\Admin\JsConfig('sulu.websocket.server', array('port' => 9876, 'httpHost' => 'sulu.lo'));
    }

    /**
     * Gets the 'sulu_content.node_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Repository\NodeRepository A Sulu\Bundle\ContentBundle\Repository\NodeRepository instance.
     */
    protected function getSuluContent_NodeRepositoryService()
    {
        return $this->services['sulu_content.node_repository'] = new \Sulu\Bundle\ContentBundle\Repository\NodeRepository($this->get('sulu.content.mapper'), $this->get('sulu.phpcr.session'), $this->get('sulu_security.user_manager'), $this->get('sulu_core.webspace.webspace_manager'), $this->get('sulu_content.smart_content.data_provider.content.query_builder'), $this->get('sulu.content.query_executor'), $this->get('sulu_security.access_control_manager'), NULL, $this->get('logger'));
    }

    /**
     * Gets the 'sulu_content.permission_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Search\EventListener\PermissionListener A Sulu\Bundle\ContentBundle\Search\EventListener\PermissionListener instance.
     */
    protected function getSuluContent_PermissionListenerService()
    {
        return $this->services['sulu_content.permission_listener'] = new \Sulu\Bundle\ContentBundle\Search\EventListener\PermissionListener($this->get('sulu_document_manager.document_manager'), $this->get('massive_search.search_manager'));
    }

    /**
     * Gets the 'sulu_content.preview' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Preview\Preview A Sulu\Bundle\ContentBundle\Preview\Preview instance.
     */
    protected function getSuluContent_PreviewService()
    {
        return $this->services['sulu_content.preview'] = new \Sulu\Bundle\ContentBundle\Preview\Preview($this->get('sulu.content.type_manager'), new \Sulu\Bundle\ContentBundle\Preview\DoctrineCacheProvider($this->get('sulu.content.mapper'), $this->get('sulu.content.structure_manager'), $this->get('jms_serializer'), $this->get('sulu_content.preview.cache_provider.data_cache'), $this->get('sulu_content.preview.cache_provider.changes_cache')), new \Sulu\Bundle\ContentBundle\Preview\PreviewRenderer($this->get('liip_theme.active_theme'), $this->get('controller_resolver'), $this->get('sulu_core.webspace.webspace_manager'), $this->get('request_stack'), $this->get('sulu_website.translator.request_analyzer'), $this->get('sulu_core.webspace.request_analyzer')), new \Sulu\Bundle\ContentBundle\Preview\RdfaCrawler());
    }

    /**
     * Gets the 'sulu_content.preview.cache_provider.changes_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\FilesystemCache A Doctrine\Common\Cache\FilesystemCache instance.
     */
    protected function getSuluContent_Preview_CacheProvider_ChangesCacheService()
    {
        return $this->services['sulu_content.preview.cache_provider.changes_cache'] = new \Doctrine\Common\Cache\FilesystemCache((__DIR__.'/sulu/preview/changes'));
    }

    /**
     * Gets the 'sulu_content.preview.cache_provider.data_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\FilesystemCache A Doctrine\Common\Cache\FilesystemCache instance.
     */
    protected function getSuluContent_Preview_CacheProvider_DataCacheService()
    {
        return $this->services['sulu_content.preview.cache_provider.data_cache'] = new \Doctrine\Common\Cache\FilesystemCache((__DIR__.'/sulu/preview/data'));
    }

    /**
     * Gets the 'sulu_content.preview.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\EventListener\PreviewExceptionListener A Sulu\Bundle\ContentBundle\EventListener\PreviewExceptionListener instance.
     */
    protected function getSuluContent_Preview_ExceptionListenerService()
    {
        return $this->services['sulu_content.preview.exception_listener'] = new \Sulu\Bundle\ContentBundle\EventListener\PreviewExceptionListener($this->get('sulu_website.templating.event_aware_engine'), $this->get('logger'), NULL);
    }

    /**
     * Gets the 'sulu_content.preview.message_component' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Preview\PreviewMessageHandler A Sulu\Bundle\ContentBundle\Preview\PreviewMessageHandler instance.
     */
    protected function getSuluContent_Preview_MessageComponentService()
    {
        return $this->services['sulu_content.preview.message_component'] = new \Sulu\Bundle\ContentBundle\Preview\PreviewMessageHandler($this->get('sulu_content.preview'), $this->get('sulu_core.webspace.request_analyzer'), $this->get('doctrine'), $this->get('sulu.content.mapper'), $this->get('logger'));
    }

    /**
     * Gets the 'sulu_content.rl_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Repository\ResourceLocatorRepository A Sulu\Bundle\ContentBundle\Repository\ResourceLocatorRepository instance.
     */
    protected function getSuluContent_RlRepositoryService()
    {
        return $this->services['sulu_content.rl_repository'] = new \Sulu\Bundle\ContentBundle\Repository\ResourceLocatorRepository($this->get('sulu.content.rlp.strategy.tree'), $this->get('sulu.content.structure_manager'), $this->get('sulu.content.mapper'));
    }

    /**
     * Gets the 'sulu_content.search.event_subscriber.blame_timestamp' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Search\EventSubscriber\BlameTimestampSubscriber A Sulu\Bundle\ContentBundle\Search\EventSubscriber\BlameTimestampSubscriber instance.
     */
    protected function getSuluContent_Search_EventSubscriber_BlameTimestampService()
    {
        return $this->services['sulu_content.search.event_subscriber.blame_timestamp'] = new \Sulu\Bundle\ContentBundle\Search\EventSubscriber\BlameTimestampSubscriber($this->get('sulu_search.search.factory'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'sulu_content.search.event_subscriber.structure' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Search\EventSubscriber\StructureSubscriber A Sulu\Bundle\ContentBundle\Search\EventSubscriber\StructureSubscriber instance.
     */
    protected function getSuluContent_Search_EventSubscriber_StructureService()
    {
        return $this->services['sulu_content.search.event_subscriber.structure'] = new \Sulu\Bundle\ContentBundle\Search\EventSubscriber\StructureSubscriber($this->get('massive_search.search_manager'), $this->get('sulu_document_manager.metadata_factory'));
    }

    /**
     * Gets the 'sulu_content.search.metadata.provider.structure' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Search\Metadata\StructureProvider A Sulu\Bundle\ContentBundle\Search\Metadata\StructureProvider instance.
     */
    protected function getSuluContent_Search_Metadata_Provider_StructureService()
    {
        return $this->services['sulu_content.search.metadata.provider.structure'] = new \Sulu\Bundle\ContentBundle\Search\Metadata\StructureProvider($this->get('sulu_search.search.factory'), $this->get('sulu_document_manager.metadata_factory'), $this->get('sulu_content.structure.factory'), $this->get('sulu_content.extension.manager'), array('Sulu\\Bundle\\ContentBundle\\Document\\PageDocument' => array('index' => 'page'), 'Sulu\\Bundle\\SnippetBundle\\Document\\SnippetDocument' => array('index' => 'snippet')));
    }

    /**
     * Gets the 'sulu_content.search.reindex.structure_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Search\Reindex\StructureProvider A Sulu\Bundle\ContentBundle\Search\Reindex\StructureProvider instance.
     */
    protected function getSuluContent_Search_Reindex_StructureProviderService()
    {
        return $this->services['sulu_content.search.reindex.structure_provider'] = new \Sulu\Bundle\ContentBundle\Search\Reindex\StructureProvider($this->get('sulu_document_manager.document_manager'), $this->get('sulu_document_manager.metadata_factory.base'), $this->get('sulu_content.structure.factory'), $this->get('sulu_document_manager.document_inspector'));
    }

    /**
     * Gets the 'sulu_content.smart_content.content_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\SmartContent\ContentType A Sulu\Component\SmartContent\ContentType instance.
     */
    protected function getSuluContent_SmartContent_ContentTypeService()
    {
        return $this->services['sulu_content.smart_content.content_type'] = new \Sulu\Component\SmartContent\ContentType($this->get('sulu_content.smart_content.data_provider_pool'), $this->get('sulu_tag.tag_manager'), $this->get('request_stack'), $this->get('sulu_tag.tag_request_handler'), $this->get('sulu_category.category_request_handler'), 'SuluContentBundle:Template:content-types/smart_content.html.twig');
    }

    /**
     * Gets the 'sulu_content.smart_content.data_provider.content' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\SmartContent\ContentDataProvider A Sulu\Component\Content\SmartContent\ContentDataProvider instance.
     */
    protected function getSuluContent_SmartContent_DataProvider_ContentService()
    {
        return $this->services['sulu_content.smart_content.data_provider.content'] = new \Sulu\Component\Content\SmartContent\ContentDataProvider($this->get('sulu_content.smart_content.data_provider.content.query_builder'), $this->get('sulu.content.query_executor'), $this->get('sulu_document_manager.document_manager'), $this->get('sulu_content.smart_content.data_provider.content.proxy_factory'));
    }

    /**
     * Gets the 'sulu_content.smart_content.data_provider.content.proxy_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ProxyManager\Factory\LazyLoadingValueHolderFactory A ProxyManager\Factory\LazyLoadingValueHolderFactory instance.
     */
    protected function getSuluContent_SmartContent_DataProvider_Content_ProxyFactoryService()
    {
        return $this->services['sulu_content.smart_content.data_provider.content.proxy_factory'] = new \ProxyManager\Factory\LazyLoadingValueHolderFactory();
    }

    /**
     * Gets the 'sulu_content.smart_content.data_provider_pool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\SmartContent\DataProviderPool A Sulu\Component\SmartContent\DataProviderPool instance.
     */
    protected function getSuluContent_SmartContent_DataProviderPoolService()
    {
        $this->services['sulu_content.smart_content.data_provider_pool'] = $instance = new \Sulu\Component\SmartContent\DataProviderPool();

        $instance->add('contact', $this->get('sulu_contact.smart_content.data_provider.contact'));
        $instance->add('account', $this->get('sulu_contact.smart_content.data_provider.account'));
        $instance->add('media', $this->get('sulu_media.smart_content.data_provider.media'));
        $instance->add('content', $this->get('sulu_content.smart_content.data_provider.content'));

        return $instance;
    }

    /**
     * Gets the 'sulu_content.structure.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Metadata\Factory\StructureMetadataFactory A Sulu\Component\Content\Metadata\Factory\StructureMetadataFactory instance.
     */
    protected function getSuluContent_Structure_FactoryService()
    {
        return $this->services['sulu_content.structure.factory'] = new \Sulu\Component\Content\Metadata\Factory\StructureMetadataFactory(new \Sulu\Component\Content\Metadata\Loader\XmlLoader(), array('page' => array(0 => array('path' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/ContentBundle/DependencyInjection/../Content/templates'), 'type' => 'page'), 1 => array('path' => ($this->targetDirs[3].'/Resources/pages'), 'type' => 'page'), 2 => array('path' => ($this->targetDirs[3].'/../vendor/sulu/sulu/src/Sulu/Bundle/CoreBundle/Content/templates'), 'type' => 'page')), 'home' => array(0 => array('path' => ($this->targetDirs[3].'/Resources/pages'), 'type' => 'home')), 'snippet' => array(0 => array('path' => ($this->targetDirs[3].'/Resources/snippets'), 'type' => 'snippet'))), array('snippet' => 'default'), (__DIR__.'/sulu/structures'), true);
    }

    /**
     * Gets the 'sulu_content.twig_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Twig\ContentTwigExtension A Sulu\Bundle\ContentBundle\Twig\ContentTwigExtension instance.
     */
    protected function getSuluContent_TwigExtensionService()
    {
        return $this->services['sulu_content.twig_extension'] = new \Sulu\Bundle\ContentBundle\Twig\ContentTwigExtension($this->get('sulu.content.type_manager'));
    }

    /**
     * Gets the 'sulu_core.array_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Serializer\ArraySerializationVisitor A Sulu\Component\Serializer\ArraySerializationVisitor instance.
     */
    protected function getSuluCore_ArraySerializationVisitorService()
    {
        return $this->services['sulu_core.array_serialization_visitor'] = new \Sulu\Component\Serializer\ArraySerializationVisitor($this->get('jms_serializer.naming_strategy'));
    }

    /**
     * Gets the 'sulu_core.build.builder.database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\CoreBundle\Build\DatabaseBuilder A Sulu\Bundle\CoreBundle\Build\DatabaseBuilder instance.
     */
    protected function getSuluCore_Build_Builder_DatabaseService()
    {
        return $this->services['sulu_core.build.builder.database'] = new \Sulu\Bundle\CoreBundle\Build\DatabaseBuilder();
    }

    /**
     * Gets the 'sulu_core.build.builder.fixtures' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\CoreBundle\Build\FixturesBuilder A Sulu\Bundle\CoreBundle\Build\FixturesBuilder instance.
     */
    protected function getSuluCore_Build_Builder_FixturesService()
    {
        return $this->services['sulu_core.build.builder.fixtures'] = new \Sulu\Bundle\CoreBundle\Build\FixturesBuilder();
    }

    /**
     * Gets the 'sulu_core.build.builder.node_order' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\CoreBundle\Build\NodeOrderBuilder A Sulu\Bundle\CoreBundle\Build\NodeOrderBuilder instance.
     */
    protected function getSuluCore_Build_Builder_NodeOrderService()
    {
        return $this->services['sulu_core.build.builder.node_order'] = new \Sulu\Bundle\CoreBundle\Build\NodeOrderBuilder($this->get('sulu.phpcr.session'), $this->get('sulu_core.webspace.webspace_manager'));
    }

    /**
     * Gets the 'sulu_core.build.builder.phpcr' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\CoreBundle\Build\PhpcrBuilder A Sulu\Bundle\CoreBundle\Build\PhpcrBuilder instance.
     */
    protected function getSuluCore_Build_Builder_PhpcrService()
    {
        return $this->services['sulu_core.build.builder.phpcr'] = new \Sulu\Bundle\CoreBundle\Build\PhpcrBuilder();
    }

    /**
     * Gets the 'sulu_core.build.builder.phpcr_migrations' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\CoreBundle\Build\PhpcrMigrationsBuilder A Sulu\Bundle\CoreBundle\Build\PhpcrMigrationsBuilder instance.
     */
    protected function getSuluCore_Build_Builder_PhpcrMigrationsService()
    {
        return $this->services['sulu_core.build.builder.phpcr_migrations'] = new \Sulu\Bundle\CoreBundle\Build\PhpcrMigrationsBuilder();
    }

    /**
     * Gets the 'sulu_core.cache.memoize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Cache\Memoize A Sulu\Component\Cache\Memoize instance.
     */
    protected function getSuluCore_Cache_MemoizeService()
    {
        return $this->services['sulu_core.cache.memoize'] = new \Sulu\Component\Cache\Memoize($this->get('sulu_core.cache.memoize.cache'), 1);
    }

    /**
     * Gets the 'sulu_core.cache.memoize.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getSuluCore_Cache_Memoize_CacheService()
    {
        return $this->services['sulu_core.cache.memoize.cache'] = new \Doctrine\Common\Cache\ArrayCache();
    }

    /**
     * Gets the 'sulu_core.doctrine_list_builder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Rest\ListBuilder\Doctrine\DoctrineListBuilderFactory A Sulu\Component\Rest\ListBuilder\Doctrine\DoctrineListBuilderFactory instance.
     */
    protected function getSuluCore_DoctrineListBuilderFactoryService()
    {
        return $this->services['sulu_core.doctrine_list_builder_factory'] = new \Sulu\Component\Rest\ListBuilder\Doctrine\DoctrineListBuilderFactory($this->get('doctrine.orm.default_entity_manager'), $this->get('debug.event_dispatcher'), array('view' => 64, 'add' => 32, 'edit' => 16, 'delete' => 8, 'archive' => 4, 'live' => 2, 'security' => 1));
    }

    /**
     * Gets the 'sulu_core.doctrine_rest_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Rest\DoctrineRestHelper A Sulu\Component\Rest\DoctrineRestHelper instance.
     *
     * @throws InactiveScopeException when the 'sulu_core.doctrine_rest_helper' service is requested while the 'request' scope is not active
     */
    protected function getSuluCore_DoctrineRestHelperService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sulu_core.doctrine_rest_helper', 'request');
        }

        return $this->services['sulu_core.doctrine_rest_helper'] = $this->scopedServices['request']['sulu_core.doctrine_rest_helper'] = new \Sulu\Component\Rest\DoctrineRestHelper($this->get('sulu_core.list_rest_helper'));
    }

    /**
     * Gets the 'sulu_core.list_builder.field_descriptor_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Rest\ListBuilder\Metadata\FieldDescriptorFactory A Sulu\Component\Rest\ListBuilder\Metadata\FieldDescriptorFactory instance.
     */
    protected function getSuluCore_ListBuilder_FieldDescriptorFactoryService()
    {
        return $this->services['sulu_core.list_builder.field_descriptor_factory'] = new \Sulu\Component\Rest\ListBuilder\Metadata\FieldDescriptorFactory($this->get('sulu_core.list_builder.metadata.provider.chain'), (__DIR__.'/sulu/field_descriptor'), true);
    }

    /**
     * Gets the 'sulu_core.list_builder.metadata.file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Metadata\Driver\FileLocator A Metadata\Driver\FileLocator instance.
     */
    protected function getSuluCore_ListBuilder_Metadata_FileLocatorService()
    {
        return $this->services['sulu_core.list_builder.metadata.file_locator'] = new \Metadata\Driver\FileLocator(array('Sulu\\Bundle\\ContactBundle\\Entity' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/Resources/config/list-builder'), 'Sulu\\Bundle\\MediaBundle\\Entity' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Resources/config/list-builder'), 'Sulu\\Bundle\\CategoryBundle\\Entity' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/Resources/config/list-builder')));
    }

    /**
     * Gets the 'sulu_core.list_builder.metadata.parameter_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ParameterBag A Symfony\Component\DependencyInjection\ParameterBag\ParameterBag instance.
     */
    protected function getSuluCore_ListBuilder_Metadata_ParameterBagService()
    {
        return $this->services['sulu_core.list_builder.metadata.parameter_bag'] = $this->getParameterBag();
    }

    /**
     * Gets the 'sulu_core.list_builder.metadata.provider.chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Rest\ListBuilder\Metadata\Provider\ChainProvider A Sulu\Component\Rest\ListBuilder\Metadata\Provider\ChainProvider instance.
     */
    protected function getSuluCore_ListBuilder_Metadata_Provider_ChainService()
    {
        return $this->services['sulu_core.list_builder.metadata.provider.chain'] = new \Sulu\Component\Rest\ListBuilder\Metadata\Provider\ChainProvider(array(0 => $this->get('sulu_core.list_builder.metadata.provider.general'), 1 => $this->get('sulu_core.list_builder.metadata.provider.doctrine')));
    }

    /**
     * Gets the 'sulu_core.list_builder.metadata.provider.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Rest\ListBuilder\Metadata\Provider\MetadataProvider A Sulu\Component\Rest\ListBuilder\Metadata\Provider\MetadataProvider instance.
     */
    protected function getSuluCore_ListBuilder_Metadata_Provider_DoctrineService()
    {
        return $this->services['sulu_core.list_builder.metadata.provider.doctrine'] = new \Sulu\Component\Rest\ListBuilder\Metadata\Provider\MetadataProvider($this->get('sulu_core.list_builder.metadata.provider.doctrine.factory'));
    }

    /**
     * Gets the 'sulu_core.list_builder.metadata.provider.doctrine.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Metadata\Cache\FileCache A Metadata\Cache\FileCache instance.
     */
    protected function getSuluCore_ListBuilder_Metadata_Provider_Doctrine_CacheService()
    {
        return $this->services['sulu_core.list_builder.metadata.provider.doctrine.cache'] = new \Metadata\Cache\FileCache((__DIR__.'/sulu/list-builder/doctrine'));
    }

    /**
     * Gets the 'sulu_core.list_builder.metadata.provider.doctrine.driver.xml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Rest\ListBuilder\Metadata\Doctrine\Driver\XmlDriver A Sulu\Component\Rest\ListBuilder\Metadata\Doctrine\Driver\XmlDriver instance.
     */
    protected function getSuluCore_ListBuilder_Metadata_Provider_Doctrine_Driver_XmlService()
    {
        return $this->services['sulu_core.list_builder.metadata.provider.doctrine.driver.xml'] = new \Sulu\Component\Rest\ListBuilder\Metadata\Doctrine\Driver\XmlDriver($this->get('sulu_core.list_builder.metadata.file_locator'), $this->get('sulu_core.list_builder.metadata.parameter_bag'));
    }

    /**
     * Gets the 'sulu_core.list_builder.metadata.provider.doctrine.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Metadata\MetadataFactory A Metadata\MetadataFactory instance.
     */
    protected function getSuluCore_ListBuilder_Metadata_Provider_Doctrine_FactoryService()
    {
        $this->services['sulu_core.list_builder.metadata.provider.doctrine.factory'] = $instance = new \Metadata\MetadataFactory($this->get('sulu_core.list_builder.metadata.provider.doctrine.driver.xml'), 'Metadata\\ClassHierarchyMetadata', true);

        $instance->setCache($this->get('sulu_core.list_builder.metadata.provider.doctrine.cache'));

        return $instance;
    }

    /**
     * Gets the 'sulu_core.list_builder.metadata.provider.general' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Rest\ListBuilder\Metadata\Provider\MetadataProvider A Sulu\Component\Rest\ListBuilder\Metadata\Provider\MetadataProvider instance.
     */
    protected function getSuluCore_ListBuilder_Metadata_Provider_GeneralService()
    {
        return $this->services['sulu_core.list_builder.metadata.provider.general'] = new \Sulu\Component\Rest\ListBuilder\Metadata\Provider\MetadataProvider($this->get('sulu_core.list_builder.metadata.provider.general.factory'));
    }

    /**
     * Gets the 'sulu_core.list_builder.metadata.provider.general.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Metadata\Cache\FileCache A Metadata\Cache\FileCache instance.
     */
    protected function getSuluCore_ListBuilder_Metadata_Provider_General_CacheService()
    {
        return $this->services['sulu_core.list_builder.metadata.provider.general.cache'] = new \Metadata\Cache\FileCache((__DIR__.'/sulu/list-builder/general'));
    }

    /**
     * Gets the 'sulu_core.list_builder.metadata.provider.general.driver.xml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Rest\ListBuilder\Metadata\General\Driver\XmlDriver A Sulu\Component\Rest\ListBuilder\Metadata\General\Driver\XmlDriver instance.
     */
    protected function getSuluCore_ListBuilder_Metadata_Provider_General_Driver_XmlService()
    {
        return $this->services['sulu_core.list_builder.metadata.provider.general.driver.xml'] = new \Sulu\Component\Rest\ListBuilder\Metadata\General\Driver\XmlDriver($this->get('sulu_core.list_builder.metadata.file_locator'), $this->get('sulu_core.list_builder.metadata.parameter_bag'));
    }

    /**
     * Gets the 'sulu_core.list_builder.metadata.provider.general.event_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Rest\ListBuilder\Metadata\Listener\GeneralMetadataSerializeSubscriber A Sulu\Component\Rest\ListBuilder\Metadata\Listener\GeneralMetadataSerializeSubscriber instance.
     */
    protected function getSuluCore_ListBuilder_Metadata_Provider_General_EventSubscriberService()
    {
        return $this->services['sulu_core.list_builder.metadata.provider.general.event_subscriber'] = new \Sulu\Component\Rest\ListBuilder\Metadata\Listener\GeneralMetadataSerializeSubscriber();
    }

    /**
     * Gets the 'sulu_core.list_builder.metadata.provider.general.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Metadata\MetadataFactory A Metadata\MetadataFactory instance.
     */
    protected function getSuluCore_ListBuilder_Metadata_Provider_General_FactoryService()
    {
        $this->services['sulu_core.list_builder.metadata.provider.general.factory'] = $instance = new \Metadata\MetadataFactory($this->get('sulu_core.list_builder.metadata.provider.general.driver.xml'), 'Metadata\\ClassHierarchyMetadata', true);

        $instance->setCache($this->get('sulu_core.list_builder.metadata.provider.general.cache'));

        return $instance;
    }

    /**
     * Gets the 'sulu_core.list_rest_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Rest\ListBuilder\ListRestHelper A Sulu\Component\Rest\ListBuilder\ListRestHelper instance.
     *
     * @throws InactiveScopeException when the 'sulu_core.list_rest_helper' service is requested while the 'request' scope is not active
     */
    protected function getSuluCore_ListRestHelperService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sulu_core.list_rest_helper', 'request');
        }

        return $this->services['sulu_core.list_rest_helper'] = $this->scopedServices['request']['sulu_core.list_rest_helper'] = new \Sulu\Component\Rest\ListBuilder\ListRestHelper($this->get('request'));
    }

    /**
     * Gets the 'sulu_core.request_processor.website' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Webspace\Analyzer\Attributes\WebsiteRequestProcessor A Sulu\Component\Webspace\Analyzer\Attributes\WebsiteRequestProcessor instance.
     */
    protected function getSuluCore_RequestProcessor_WebsiteService()
    {
        return $this->services['sulu_core.request_processor.website'] = new \Sulu\Component\Webspace\Analyzer\Attributes\WebsiteRequestProcessor($this->get('sulu_core.webspace.webspace_manager'), $this->get('sulu.content.mapper'), $this->get('sulu_core.webspace.webspace_manager.url_replacer'), 'dev');
    }

    /**
     * Gets the 'sulu_core.rest.datetime_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Rest\Handler\DateHandler A Sulu\Component\Rest\Handler\DateHandler instance.
     */
    protected function getSuluCore_Rest_DatetimeHandlerService()
    {
        return $this->services['sulu_core.rest.datetime_handler'] = new \Sulu\Component\Rest\Handler\DateHandler();
    }

    /**
     * Gets the 'sulu_core.rest.exception_wrapper_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Rest\ExceptionWrapperHandler A Sulu\Component\Rest\ExceptionWrapperHandler instance.
     */
    protected function getSuluCore_Rest_ExceptionWrapperHandlerService()
    {
        return $this->services['sulu_core.rest.exception_wrapper_handler'] = new \Sulu\Component\Rest\ExceptionWrapperHandler();
    }

    /**
     * Gets the 'sulu_core.rest.view_handler.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Rest\Csv\CsvHandler A Sulu\Component\Rest\Csv\CsvHandler instance.
     */
    protected function getSuluCore_Rest_ViewHandler_CsvService()
    {
        return $this->services['sulu_core.rest.view_handler.csv'] = new \Sulu\Component\Rest\Csv\CsvHandler($this->get('jms_serializer'));
    }

    /**
     * Gets the 'sulu_core.rest_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Rest\RestHelper A Sulu\Component\Rest\RestHelper instance.
     *
     * @throws InactiveScopeException when the 'sulu_core.rest_helper' service is requested while the 'request' scope is not active
     */
    protected function getSuluCore_RestHelperService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sulu_core.rest_helper', 'request');
        }

        return $this->services['sulu_core.rest_helper'] = $this->scopedServices['request']['sulu_core.rest_helper'] = new \Sulu\Component\Rest\RestHelper($this->get('sulu_core.list_rest_helper'));
    }

    /**
     * Gets the 'sulu_core.webspace.document_manager.webspace_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Webspace\Document\Initializer\WebspaceInitializer A Sulu\Component\Webspace\Document\Initializer\WebspaceInitializer instance.
     */
    protected function getSuluCore_Webspace_DocumentManager_WebspaceInitializerService()
    {
        return $this->services['sulu_core.webspace.document_manager.webspace_initializer'] = new \Sulu\Component\Webspace\Document\Initializer\WebspaceInitializer($this->get('sulu_core.webspace.webspace_manager'), $this->get('sulu_document_manager.document_manager'), $this->get('sulu_document_manager.document_inspector'), $this->get('sulu_document_manager.path_builder'), $this->get('sulu_document_manager.node_manager'));
    }

    /**
     * Gets the 'sulu_core.webspace.loader.xml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Webspace\Loader\XmlFileLoader A Sulu\Component\Webspace\Loader\XmlFileLoader instance.
     */
    protected function getSuluCore_Webspace_Loader_XmlService()
    {
        return $this->services['sulu_core.webspace.loader.xml'] = new \Sulu\Component\Webspace\Loader\XmlFileLoader($this->get('file_locator'));
    }

    /**
     * Gets the 'sulu_core.webspace.request_analyzer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Webspace\Analyzer\RequestAnalyzer A Sulu\Component\Webspace\Analyzer\RequestAnalyzer instance.
     */
    protected function getSuluCore_Webspace_RequestAnalyzerService()
    {
        return $this->services['sulu_core.webspace.request_analyzer'] = new \Sulu\Component\Webspace\Analyzer\RequestAnalyzer($this->get('request_stack'), array(0 => $this->get('sulu_core.request_processor.website'), 1 => $this->get('sulu_custom_urls.request_processor')));
    }

    /**
     * Gets the 'sulu_core.webspace.settings_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Webspace\Settings\SettingsManager A Sulu\Component\Webspace\Settings\SettingsManager instance.
     */
    protected function getSuluCore_Webspace_SettingsManagerService()
    {
        return $this->services['sulu_core.webspace.settings_manager'] = new \Sulu\Component\Webspace\Settings\SettingsManager($this->get('sulu.phpcr.session'));
    }

    /**
     * Gets the 'sulu_core.webspace.url_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Webspace\Url\WebspaceUrlChainProvider A Sulu\Component\Webspace\Url\WebspaceUrlChainProvider instance.
     */
    protected function getSuluCore_Webspace_UrlProviderService()
    {
        return $this->services['sulu_core.webspace.url_provider'] = new \Sulu\Component\Webspace\Url\WebspaceUrlChainProvider(array(0 => $this->get('sulu_core.webspace.url_provider.default'), 1 => $this->get('sulu_custom_urls.url_provider')));
    }

    /**
     * Gets the 'sulu_core.webspace.url_provider.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Webspace\Url\WebspaceUrlProvider A Sulu\Component\Webspace\Url\WebspaceUrlProvider instance.
     */
    protected function getSuluCore_Webspace_UrlProvider_DefaultService()
    {
        return $this->services['sulu_core.webspace.url_provider.default'] = new \Sulu\Component\Webspace\Url\WebspaceUrlProvider();
    }

    /**
     * Gets the 'sulu_core.webspace.webspace_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Webspace\Manager\WebspaceManager A Sulu\Component\Webspace\Manager\WebspaceManager instance.
     */
    protected function getSuluCore_Webspace_WebspaceManagerService()
    {
        return $this->services['sulu_core.webspace.webspace_manager'] = new \Sulu\Component\Webspace\Manager\WebspaceManager($this->get('sulu_core.webspace.loader.xml'), $this->get('sulu_core.webspace.webspace_manager.url_replacer'), $this->get('logger'), array('config_dir' => ($this->targetDirs[3].'/Resources/webspaces'), 'cache_dir' => (__DIR__.'/sulu'), 'debug' => true, 'cache_class' => 'WebspaceCollectionCache', 'base_class' => 'WebspaceCollection'));
    }

    /**
     * Gets the 'sulu_core.webspace.webspace_manager.url_replacer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Webspace\Url\Replacer A Sulu\Component\Webspace\Url\Replacer instance.
     */
    protected function getSuluCore_Webspace_WebspaceManager_UrlReplacerService()
    {
        return $this->services['sulu_core.webspace.webspace_manager.url_replacer'] = new \Sulu\Component\Webspace\Url\Replacer();
    }

    /**
     * Gets the 'sulu_custom_urls.domain_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\CustomUrl\Generator\Generator A Sulu\Component\CustomUrl\Generator\Generator instance.
     */
    protected function getSuluCustomUrls_DomainGeneratorService()
    {
        return $this->services['sulu_custom_urls.domain_generator'] = new \Sulu\Component\CustomUrl\Generator\Generator($this->get('sulu_core.webspace.webspace_manager.url_replacer'));
    }

    /**
     * Gets the 'sulu_custom_urls.initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\CustomUrl\Document\Initializer\CustomUrlInitializer A Sulu\Component\CustomUrl\Document\Initializer\CustomUrlInitializer instance.
     */
    protected function getSuluCustomUrls_InitializerService()
    {
        return $this->services['sulu_custom_urls.initializer'] = new \Sulu\Component\CustomUrl\Document\Initializer\CustomUrlInitializer($this->get('sulu_document_manager.node_manager'), $this->get('sulu_document_manager.path_builder'), $this->get('sulu_core.webspace.webspace_manager'), $this->get('sulu.phpcr.session'));
    }

    /**
     * Gets the 'sulu_custom_urls.invalidate.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\CustomUrl\Document\Subscriber\InvalidateSubscriber A Sulu\Component\CustomUrl\Document\Subscriber\InvalidateSubscriber instance.
     */
    protected function getSuluCustomUrls_Invalidate_SubscriberService()
    {
        return $this->services['sulu_custom_urls.invalidate.subscriber'] = new \Sulu\Component\CustomUrl\Document\Subscriber\InvalidateSubscriber($this->get('sulu_custom_urls.manager'));
    }

    /**
     * Gets the 'sulu_custom_urls.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\CustomUrl\Manager\CustomUrlManager A Sulu\Component\CustomUrl\Manager\CustomUrlManager instance.
     */
    protected function getSuluCustomUrls_ManagerService()
    {
        return $this->services['sulu_custom_urls.manager'] = new \Sulu\Component\CustomUrl\Manager\CustomUrlManager($this->get('sulu_document_manager.document_manager'), $this->get('sulu_custom_urls.repository'), $this->get('sulu_document_manager.metadata_factory'), $this->get('sulu_document_manager.path_builder'), $this->get('sulu_http_cache.handler.aggregate'));
    }

    /**
     * Gets the 'sulu_custom_urls.repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\CustomUrl\Repository\CustomUrlRepository A Sulu\Component\CustomUrl\Repository\CustomUrlRepository instance.
     */
    protected function getSuluCustomUrls_RepositoryService()
    {
        return $this->services['sulu_custom_urls.repository'] = new \Sulu\Component\CustomUrl\Repository\CustomUrlRepository($this->get('sulu.phpcr.session'), $this->get('sulu_content.content_repository'), $this->get('sulu_custom_urls.domain_generator'), $this->get('sulu_security.user_manager'));
    }

    /**
     * Gets the 'sulu_custom_urls.request_processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\CustomUrlBundle\Request\CustomUrlRequestProcessor A Sulu\Bundle\CustomUrlBundle\Request\CustomUrlRequestProcessor instance.
     */
    protected function getSuluCustomUrls_RequestProcessorService()
    {
        return $this->services['sulu_custom_urls.request_processor'] = new \Sulu\Bundle\CustomUrlBundle\Request\CustomUrlRequestProcessor($this->get('sulu_custom_urls.manager'), $this->get('sulu_custom_urls.domain_generator'), $this->get('sulu_core.webspace.webspace_manager'), 'dev');
    }

    /**
     * Gets the 'sulu_custom_urls.routing.generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\Routing\ProviderBasedGenerator A Symfony\Cmf\Component\Routing\ProviderBasedGenerator instance.
     */
    protected function getSuluCustomUrls_Routing_GeneratorService()
    {
        return $this->services['sulu_custom_urls.routing.generator'] = new \Symfony\Cmf\Component\Routing\ProviderBasedGenerator($this->get('sulu_custom_urls.routing.provider'));
    }

    /**
     * Gets the 'sulu_custom_urls.routing.nested_matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher A Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher instance.
     */
    protected function getSuluCustomUrls_Routing_NestedMatcherService()
    {
        return $this->services['sulu_custom_urls.routing.nested_matcher'] = new \Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher($this->get('sulu_custom_urls.routing.provider'), $this->get('cmf_sulu_custom_urls.final_matcher'));
    }

    /**
     * Gets the 'sulu_custom_urls.routing.provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\CustomUrl\Routing\CustomUrlRouteProvider A Sulu\Component\CustomUrl\Routing\CustomUrlRouteProvider instance.
     */
    protected function getSuluCustomUrls_Routing_ProviderService()
    {
        return $this->services['sulu_custom_urls.routing.provider'] = new \Sulu\Component\CustomUrl\Routing\CustomUrlRouteProvider($this->get('sulu_core.webspace.request_analyzer'), $this->get('sulu_document_manager.path_builder'), 'dev');
    }

    /**
     * Gets the 'sulu_custom_urls.routing.route_enhancers.content' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\CustomUrl\Routing\Enhancers\ContentEnhancer A Sulu\Component\CustomUrl\Routing\Enhancers\ContentEnhancer instance.
     */
    protected function getSuluCustomUrls_Routing_RouteEnhancers_ContentService()
    {
        return $this->services['sulu_custom_urls.routing.route_enhancers.content'] = new \Sulu\Component\CustomUrl\Routing\Enhancers\ContentEnhancer($this->get('sulu_document_manager.document_inspector'), $this->get('sulu.content.structure_manager'));
    }

    /**
     * Gets the 'sulu_custom_urls.routing.route_enhancers.external_link' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\CustomUrl\Routing\Enhancers\ExternalLinkEnhancer A Sulu\Component\CustomUrl\Routing\Enhancers\ExternalLinkEnhancer instance.
     */
    protected function getSuluCustomUrls_Routing_RouteEnhancers_ExternalLinkService()
    {
        return $this->services['sulu_custom_urls.routing.route_enhancers.external_link'] = new \Sulu\Component\CustomUrl\Routing\Enhancers\ExternalLinkEnhancer();
    }

    /**
     * Gets the 'sulu_custom_urls.routing.route_enhancers.internal_link' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\CustomUrl\Routing\Enhancers\InternalLinkEnhancer A Sulu\Component\CustomUrl\Routing\Enhancers\InternalLinkEnhancer instance.
     */
    protected function getSuluCustomUrls_Routing_RouteEnhancers_InternalLinkService()
    {
        return $this->services['sulu_custom_urls.routing.route_enhancers.internal_link'] = new \Sulu\Component\CustomUrl\Routing\Enhancers\InternalLinkEnhancer();
    }

    /**
     * Gets the 'sulu_custom_urls.routing.route_enhancers.redirect' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\CustomUrl\Routing\Enhancers\RedirectEnhancer A Sulu\Component\CustomUrl\Routing\Enhancers\RedirectEnhancer instance.
     */
    protected function getSuluCustomUrls_Routing_RouteEnhancers_RedirectService()
    {
        return $this->services['sulu_custom_urls.routing.route_enhancers.redirect'] = new \Sulu\Component\CustomUrl\Routing\Enhancers\RedirectEnhancer($this->get('sulu_core.webspace.webspace_manager'));
    }

    /**
     * Gets the 'sulu_custom_urls.routing.route_enhancers.seo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\CustomUrl\Routing\Enhancers\SeoEnhancer A Sulu\Component\CustomUrl\Routing\Enhancers\SeoEnhancer instance.
     */
    protected function getSuluCustomUrls_Routing_RouteEnhancers_SeoService()
    {
        return $this->services['sulu_custom_urls.routing.route_enhancers.seo'] = new \Sulu\Component\CustomUrl\Routing\Enhancers\SeoEnhancer($this->get('sulu_core.webspace.webspace_manager'));
    }

    /**
     * Gets the 'sulu_custom_urls.routing.route_enhancers.structure' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\CustomUrl\Routing\Enhancers\StructureEnhancer A Sulu\Component\CustomUrl\Routing\Enhancers\StructureEnhancer instance.
     */
    protected function getSuluCustomUrls_Routing_RouteEnhancers_StructureService()
    {
        return $this->services['sulu_custom_urls.routing.route_enhancers.structure'] = new \Sulu\Component\CustomUrl\Routing\Enhancers\StructureEnhancer();
    }

    /**
     * Gets the 'sulu_custom_urls.routing.route_enhancers.trailing_html' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\CustomUrl\Routing\Enhancers\TrailingHTMLEnhancer A Sulu\Component\CustomUrl\Routing\Enhancers\TrailingHTMLEnhancer instance.
     */
    protected function getSuluCustomUrls_Routing_RouteEnhancers_TrailingHtmlService()
    {
        return $this->services['sulu_custom_urls.routing.route_enhancers.trailing_html'] = new \Sulu\Component\CustomUrl\Routing\Enhancers\TrailingHTMLEnhancer();
    }

    /**
     * Gets the 'sulu_custom_urls.routing.route_enhancers.trailing_slash' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\CustomUrl\Routing\Enhancers\TrailingSlashEnhancer A Sulu\Component\CustomUrl\Routing\Enhancers\TrailingSlashEnhancer instance.
     */
    protected function getSuluCustomUrls_Routing_RouteEnhancers_TrailingSlashService()
    {
        return $this->services['sulu_custom_urls.routing.route_enhancers.trailing_slash'] = new \Sulu\Component\CustomUrl\Routing\Enhancers\TrailingSlashEnhancer();
    }

    /**
     * Gets the 'sulu_custom_urls.routing.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Routing\DynamicRouter A Symfony\Cmf\Bundle\RoutingBundle\Routing\DynamicRouter instance.
     */
    protected function getSuluCustomUrls_Routing_RouterService()
    {
        $this->services['sulu_custom_urls.routing.router'] = $instance = new \Symfony\Cmf\Bundle\RoutingBundle\Routing\DynamicRouter($this->get('router.request_context'), $this->get('sulu_custom_urls.routing.nested_matcher'), $this->get('sulu_custom_urls.routing.generator'), NULL, $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('sulu_custom_urls.routing.provider'));

        $instance->addRouteEnhancer($this->get('sulu_custom_urls.routing.route_enhancers.trailing_slash'), 100);
        $instance->addRouteEnhancer($this->get('sulu_custom_urls.routing.route_enhancers.trailing_html'), 90);
        $instance->addRouteEnhancer($this->get('sulu_custom_urls.routing.route_enhancers.redirect'), 80);
        $instance->addRouteEnhancer($this->get('sulu_custom_urls.routing.route_enhancers.seo'), 70);
        $instance->addRouteEnhancer($this->get('sulu_custom_urls.routing.route_enhancers.content'), 60);
        $instance->addRouteEnhancer($this->get('sulu_custom_urls.routing.route_enhancers.internal_link'), 50);
        $instance->addRouteEnhancer($this->get('sulu_custom_urls.routing.route_enhancers.structure'), 40);
        $instance->addRouteEnhancer($this->get('sulu_custom_urls.routing.route_enhancers.external_link'), 30);

        return $instance;
    }

    /**
     * Gets the 'sulu_custom_urls.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\CustomUrl\Document\Subscriber\CustomUrlSubscriber A Sulu\Component\CustomUrl\Document\Subscriber\CustomUrlSubscriber instance.
     */
    protected function getSuluCustomUrls_SubscriberService()
    {
        return $this->services['sulu_custom_urls.subscriber'] = new \Sulu\Component\CustomUrl\Document\Subscriber\CustomUrlSubscriber($this->get('sulu_custom_urls.domain_generator'), $this->get('sulu_document_manager.document_manager'), $this->get('sulu_document_manager.path_builder'), $this->get('sulu_document_manager.document_inspector'), $this->get('sulu_core.webspace.webspace_manager'));
    }

    /**
     * Gets the 'sulu_custom_urls.url_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\CustomUrl\WebspaceCustomUrlProvider A Sulu\Component\CustomUrl\WebspaceCustomUrlProvider instance.
     */
    protected function getSuluCustomUrls_UrlProviderService()
    {
        return $this->services['sulu_custom_urls.url_provider'] = new \Sulu\Component\CustomUrl\WebspaceCustomUrlProvider($this->get('sulu_custom_urls.manager'));
    }

    /**
     * Gets the 'sulu_document_manager.command.fixtures_load' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Command\FixturesLoadCommand A Sulu\Bundle\DocumentManagerBundle\Command\FixturesLoadCommand instance.
     */
    protected function getSuluDocumentManager_Command_FixturesLoadService()
    {
        return $this->services['sulu_document_manager.command.fixtures_load'] = new \Sulu\Bundle\DocumentManagerBundle\Command\FixturesLoadCommand($this->get('sulu_document_manager.data_fixtures.loader'), $this->get('sulu_document_manager.data_fixtures.executor'), $this->get('kernel'));
    }

    /**
     * Gets the 'sulu_document_manager.command.initialize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Command\InitializeCommand A Sulu\Bundle\DocumentManagerBundle\Command\InitializeCommand instance.
     */
    protected function getSuluDocumentManager_Command_InitializeService()
    {
        return $this->services['sulu_document_manager.command.initialize'] = new \Sulu\Bundle\DocumentManagerBundle\Command\InitializeCommand($this->get('sulu_document_manager.initializer'));
    }

    /**
     * Gets the 'sulu_document_manager.data_fixtures.executor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\DataFixtures\DocumentExecutor A Sulu\Bundle\DocumentManagerBundle\DataFixtures\DocumentExecutor instance.
     */
    protected function getSuluDocumentManager_DataFixtures_ExecutorService()
    {
        return $this->services['sulu_document_manager.data_fixtures.executor'] = new \Sulu\Bundle\DocumentManagerBundle\DataFixtures\DocumentExecutor($this->get('sulu_document_manager.document_manager'), $this->get('sulu_document_manager.initializer'));
    }

    /**
     * Gets the 'sulu_document_manager.data_fixtures.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\DataFixtures\DocumentFixtureLoader A Sulu\Bundle\DocumentManagerBundle\DataFixtures\DocumentFixtureLoader instance.
     */
    protected function getSuluDocumentManager_DataFixtures_LoaderService()
    {
        return $this->services['sulu_document_manager.data_fixtures.loader'] = new \Sulu\Bundle\DocumentManagerBundle\DataFixtures\DocumentFixtureLoader($this);
    }

    /**
     * Gets the 'sulu_document_manager.document.subscriber.compat.content_mapper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\Compat\ContentMapperSubscriber A Sulu\Component\Content\Document\Subscriber\Compat\ContentMapperSubscriber instance.
     */
    protected function getSuluDocumentManager_Document_Subscriber_Compat_ContentMapperService()
    {
        return $this->services['sulu_document_manager.document.subscriber.compat.content_mapper'] = new \Sulu\Component\Content\Document\Subscriber\Compat\ContentMapperSubscriber($this->get('sulu_document_manager.document_inspector'), $this->get('debug.event_dispatcher'), $this->get('sulu.content.mapper'), $this->get('sulu.util.node_helper'), $this->get('sulu.content.structure_manager'));
    }

    /**
     * Gets the 'sulu_document_manager.document.subscriber.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\ExtensionSubscriber A Sulu\Component\Content\Document\Subscriber\ExtensionSubscriber instance.
     */
    protected function getSuluDocumentManager_Document_Subscriber_ExtensionService()
    {
        return $this->services['sulu_document_manager.document.subscriber.extension'] = new \Sulu\Component\Content\Document\Subscriber\ExtensionSubscriber($this->get('sulu_document_manager.property_encoder'), $this->get('sulu_content.extension.manager'), $this->get('sulu_document_manager.document_inspector'), $this->get('sulu_document_manager.namespace_registry'));
    }

    /**
     * Gets the 'sulu_document_manager.document.subscriber.fallback_localization' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\FallbackLocalizationSubscriber A Sulu\Component\Content\Document\Subscriber\FallbackLocalizationSubscriber instance.
     */
    protected function getSuluDocumentManager_Document_Subscriber_FallbackLocalizationService()
    {
        return $this->services['sulu_document_manager.document.subscriber.fallback_localization'] = new \Sulu\Component\Content\Document\Subscriber\FallbackLocalizationSubscriber($this->get('sulu_document_manager.property_encoder'), $this->get('sulu_document_manager.document_inspector'), $this->get('sulu_document_manager.document_registry'), $this->get('sulu.content.localization_finder'));
    }

    /**
     * Gets the 'sulu_document_manager.document.subscriber.order' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\OrderSubscriber A Sulu\Component\Content\Document\Subscriber\OrderSubscriber instance.
     */
    protected function getSuluDocumentManager_Document_Subscriber_OrderService()
    {
        return $this->services['sulu_document_manager.document.subscriber.order'] = new \Sulu\Component\Content\Document\Subscriber\OrderSubscriber($this->get('sulu_document_manager.document_inspector'));
    }

    /**
     * Gets the 'sulu_document_manager.document.subscriber.robot' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\RobotSubscriber A Sulu\Component\Content\Document\Subscriber\RobotSubscriber instance.
     */
    protected function getSuluDocumentManager_Document_Subscriber_RobotService()
    {
        return $this->services['sulu_document_manager.document.subscriber.robot'] = new \Sulu\Component\Content\Document\Subscriber\RobotSubscriber();
    }

    /**
     * Gets the 'sulu_document_manager.document.subscriber.route' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\RouteSubscriber A Sulu\Component\Content\Document\Subscriber\RouteSubscriber instance.
     */
    protected function getSuluDocumentManager_Document_Subscriber_RouteService()
    {
        return $this->services['sulu_document_manager.document.subscriber.route'] = new \Sulu\Component\Content\Document\Subscriber\RouteSubscriber($this->get('sulu_document_manager.document_manager'), $this->get('sulu_document_manager.document_inspector'), $this->get('sulu.phpcr.session'));
    }

    /**
     * Gets the 'sulu_document_manager.document.subscriber.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\SecuritySubscriber A Sulu\Component\Content\Document\Subscriber\SecuritySubscriber instance.
     */
    protected function getSuluDocumentManager_Document_Subscriber_SecurityService()
    {
        return $this->services['sulu_document_manager.document.subscriber.security'] = new \Sulu\Component\Content\Document\Subscriber\SecuritySubscriber(array('view' => 64, 'add' => 32, 'edit' => 16, 'delete' => 8, 'archive' => 4, 'live' => 2, 'security' => 1));
    }

    /**
     * Gets the 'sulu_document_manager.document.subscriber.shadow_copy_properties' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\ShadowCopyPropertiesSubscriber A Sulu\Component\Content\Document\Subscriber\ShadowCopyPropertiesSubscriber instance.
     */
    protected function getSuluDocumentManager_Document_Subscriber_ShadowCopyPropertiesService()
    {
        return $this->services['sulu_document_manager.document.subscriber.shadow_copy_properties'] = new \Sulu\Component\Content\Document\Subscriber\ShadowCopyPropertiesSubscriber($this->get('sulu_document_manager.property_encoder'));
    }

    /**
     * Gets the 'sulu_document_manager.document.subscriber.shadow_locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\ShadowLocaleSubscriber A Sulu\Component\Content\Document\Subscriber\ShadowLocaleSubscriber instance.
     */
    protected function getSuluDocumentManager_Document_Subscriber_ShadowLocaleService()
    {
        return $this->services['sulu_document_manager.document.subscriber.shadow_locale'] = new \Sulu\Component\Content\Document\Subscriber\ShadowLocaleSubscriber($this->get('sulu_document_manager.property_encoder'), $this->get('sulu_document_manager.document_inspector'), $this->get('sulu_document_manager.document_registry'));
    }

    /**
     * Gets the 'sulu_document_manager.document.subscriber.target' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\TargetSubscriber A Sulu\Component\Content\Document\Subscriber\TargetSubscriber instance.
     */
    protected function getSuluDocumentManager_Document_Subscriber_TargetService()
    {
        return $this->services['sulu_document_manager.document.subscriber.target'] = new \Sulu\Component\Content\Document\Subscriber\TargetSubscriber();
    }

    /**
     * Gets the 'sulu_document_manager.document.subscriber.title' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\TitleSubscriber A Sulu\Component\Content\Document\Subscriber\TitleSubscriber instance.
     */
    protected function getSuluDocumentManager_Document_Subscriber_TitleService()
    {
        return $this->services['sulu_document_manager.document.subscriber.title'] = new \Sulu\Component\Content\Document\Subscriber\TitleSubscriber($this->get('sulu_document_manager.property_encoder'), $this->get('sulu_document_manager.document_inspector'));
    }

    /**
     * Gets the 'sulu_document_manager.document.subscriber.webspace' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\WebspaceSubscriber A Sulu\Component\Content\Document\Subscriber\WebspaceSubscriber instance.
     */
    protected function getSuluDocumentManager_Document_Subscriber_WebspaceService()
    {
        return $this->services['sulu_document_manager.document.subscriber.webspace'] = new \Sulu\Component\Content\Document\Subscriber\WebspaceSubscriber($this->get('sulu_document_manager.property_encoder'), $this->get('sulu_document_manager.document_inspector'), $this->get('sulu_core.webspace.webspace_manager'));
    }

    /**
     * Gets the 'sulu_document_manager.document.subscriber.workflow_stage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\WorkflowStageSubscriber A Sulu\Component\Content\Document\Subscriber\WorkflowStageSubscriber instance.
     */
    protected function getSuluDocumentManager_Document_Subscriber_WorkflowStageService()
    {
        return $this->services['sulu_document_manager.document.subscriber.workflow_stage'] = new \Sulu\Component\Content\Document\Subscriber\WorkflowStageSubscriber($this->get('sulu_document_manager.property_encoder'));
    }

    /**
     * Gets the 'sulu_document_manager.document_inspector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Bridge\DocumentInspector A Sulu\Bundle\DocumentManagerBundle\Bridge\DocumentInspector instance.
     */
    protected function getSuluDocumentManager_DocumentInspectorService()
    {
        return $this->services['sulu_document_manager.document_inspector'] = new \Sulu\Bundle\DocumentManagerBundle\Bridge\DocumentInspector($this->get('sulu_document_manager.document_registry'), $this->get('sulu_document_manager.path_segment_registry'), $this->get('sulu_document_manager.namespace_registry'), $this->get('sulu_document_manager.proxy_factory'), $this->get('sulu_document_manager.metadata_factory'), $this->get('sulu_content.structure.factory'), $this->get('sulu_document_manager.property_encoder'), $this->get('sulu_core.webspace.webspace_manager'));
    }

    /**
     * Gets the 'sulu_document_manager.document_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\DocumentManager A Sulu\Component\DocumentManager\DocumentManager instance.
     */
    protected function getSuluDocumentManager_DocumentManagerService()
    {
        return $this->services['sulu_document_manager.document_manager'] = new \Sulu\Component\DocumentManager\DocumentManager($this->get('sulu_document_manager.event_dispatcher'), $this->get('sulu_document_manager.node_manager'));
    }

    /**
     * Gets the 'sulu_document_manager.document_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\Strategy\MixinStrategy A Sulu\Component\DocumentManager\Strategy\MixinStrategy instance.
     */
    protected function getSuluDocumentManager_DocumentStrategyService()
    {
        return $this->services['sulu_document_manager.document_strategy'] = new \Sulu\Component\DocumentManager\Strategy\MixinStrategy($this->get('sulu_document_manager.metadata_factory.base'));
    }

    /**
     * Gets the 'sulu_document_manager.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher A Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher instance.
     */
    protected function getSuluDocumentManager_EventDispatcherService()
    {
        $this->services['sulu_document_manager.event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addSubscriberService('sulu_content.search.event_subscriber.structure', 'Sulu\\Bundle\\ContentBundle\\Search\\EventSubscriber\\StructureSubscriber');
        $instance->addSubscriberService('sulu_content.document.subscriber.content', 'Sulu\\Component\\Content\\Document\\Subscriber\\StructureSubscriber');
        $instance->addSubscriberService('sulu_navigationcontext.document.subscriber.navigation_context', 'Sulu\\Component\\Content\\Document\\Subscriber\\NavigationContextSubscriber');
        $instance->addSubscriberService('sulu_redirect_type.document.subscriber.redirect_type', 'Sulu\\Component\\Content\\Document\\Subscriber\\RedirectTypeSubscriber');
        $instance->addSubscriberService('sulu_resource_segment.document.subscriber.resource_segment', 'Sulu\\Component\\Content\\Document\\Subscriber\\ResourceSegmentSubscriber');
        $instance->addSubscriberService('sulu_document_manager.document.subscriber.workflow_stage', 'Sulu\\Component\\Content\\Document\\Subscriber\\WorkflowStageSubscriber');
        $instance->addSubscriberService('sulu_document_manager.document.subscriber.shadow_locale', 'Sulu\\Component\\Content\\Document\\Subscriber\\ShadowLocaleSubscriber');
        $instance->addSubscriberService('sulu_document_manager.document.subscriber.shadow_copy_properties', 'Sulu\\Component\\Content\\Document\\Subscriber\\ShadowCopyPropertiesSubscriber');
        $instance->addSubscriberService('sulu_document_manager.document.subscriber.title', 'Sulu\\Component\\Content\\Document\\Subscriber\\TitleSubscriber');
        $instance->addSubscriberService('sulu_document_manager.document.subscriber.fallback_localization', 'Sulu\\Component\\Content\\Document\\Subscriber\\FallbackLocalizationSubscriber');
        $instance->addSubscriberService('sulu_document_manager.document.subscriber.extension', 'Sulu\\Component\\Content\\Document\\Subscriber\\ExtensionSubscriber');
        $instance->addSubscriberService('sulu_document_manager.document.subscriber.order', 'Sulu\\Component\\Content\\Document\\Subscriber\\OrderSubscriber');
        $instance->addSubscriberService('sulu_document_manager.document.subscriber.security', 'Sulu\\Component\\Content\\Document\\Subscriber\\SecuritySubscriber');
        $instance->addSubscriberService('sulu_document_manager.document.subscriber.webspace', 'Sulu\\Component\\Content\\Document\\Subscriber\\WebspaceSubscriber');
        $instance->addSubscriberService('sulu_document_manager.document.subscriber.route', 'Sulu\\Component\\Content\\Document\\Subscriber\\RouteSubscriber');
        $instance->addSubscriberService('sulu_document_manager.document.subscriber.target', 'Sulu\\Component\\Content\\Document\\Subscriber\\TargetSubscriber');
        $instance->addSubscriberService('sulu_document_manager.document.subscriber.robot', 'Sulu\\Component\\Content\\Document\\Subscriber\\RobotSubscriber');
        $instance->addSubscriberService('sulu_document_manager.document.subscriber.compat.content_mapper', 'Sulu\\Component\\Content\\Document\\Subscriber\\Compat\\ContentMapperSubscriber');
        $instance->addSubscriberService('sulu_document_manager.subscriber.behavior.remove_content', 'Sulu\\Component\\Content\\Document\\Subscriber\\StructureRemoveSubscriber');
        $instance->addSubscriberService('sulu_document_manager.subscriber.core.instantiator', 'Sulu\\Component\\DocumentManager\\Subscriber\\Core\\InstantiatorSubscriber');
        $instance->addSubscriberService('sulu_document_manager.subscriber.core.registrator', 'Sulu\\Component\\DocumentManager\\Subscriber\\Core\\RegistratorSubscriber');
        $instance->addSubscriberService('sulu_document_manager.subscriber.phpcr.reorder', 'Sulu\\Component\\DocumentManager\\Subscriber\\Phpcr\\ReorderSubscriber');
        $instance->addSubscriberService('sulu_document_manager.subscriber.phpcr.find', 'Sulu\\Component\\DocumentManager\\Subscriber\\Phpcr\\FindSubscriber');
        $instance->addSubscriberService('sulu_document_manager.subscriber.phpcr.query', 'Sulu\\Component\\DocumentManager\\Subscriber\\Phpcr\\QuerySubscriber');
        $instance->addSubscriberService('sulu_document_manager.subscriber.phpcr.general', 'Sulu\\Component\\DocumentManager\\Subscriber\\Phpcr\\GeneralSubscriber');
        $instance->addSubscriberService('sulu_document_manager.subscriber.phpcr.remove', 'Sulu\\Component\\DocumentManager\\Subscriber\\Phpcr\\RemoveSubscriber');
        $instance->addSubscriberService('sulu_document_manager.subscriber.core.mapping', 'Sulu\\Component\\DocumentManager\\Subscriber\\Core\\MappingSubscriber');
        $instance->addSubscriberService('sulu_document_manager.subscriber.behavior.auto_name', 'Sulu\\Component\\DocumentManager\\Subscriber\\Behavior\\Path\\AutoNameSubscriber');
        $instance->addSubscriberService('sulu_document_manager.subscriber.behavior.path.explicit', 'Sulu\\Component\\DocumentManager\\Subscriber\\Behavior\\Path\\ExplicitSubscriber');
        $instance->addSubscriberService('sulu_document_manager.suscriber.behavior.blame', 'Sulu\\Component\\Content\\Document\\Subscriber\\BlameSubscriber');
        $instance->addSubscriberService('sulu_document_manager.suscriber.behavior.timestamp', 'Sulu\\Component\\DocumentManager\\Subscriber\\Behavior\\Audit\\TimestampSubscriber');
        $instance->addSubscriberService('sulu_document_manager.suscriber.behavior.node_name', 'Sulu\\Component\\DocumentManager\\Subscriber\\Behavior\\Mapping\\NodeNameSubscriber');
        $instance->addSubscriberService('sulu_document_manager.suscriber.behavior.uuid', 'Sulu\\Component\\DocumentManager\\Subscriber\\Behavior\\Mapping\\UuidSubscriber');
        $instance->addSubscriberService('sulu_document_manager.suscriber.behavior.locale', 'Sulu\\Component\\DocumentManager\\Subscriber\\Behavior\\Mapping\\LocaleSubscriber');
        $instance->addSubscriberService('sulu_document_manager.suscriber.behavior.parent', 'Sulu\\Component\\DocumentManager\\Subscriber\\Behavior\\Mapping\\ParentSubscriber');
        $instance->addSubscriberService('sulu_document_manager.suscriber.behavior.children', 'Sulu\\Component\\DocumentManager\\Subscriber\\Behavior\\Mapping\\ChildrenSubscriber');
        $instance->addSubscriberService('sulu_document_manager.subscriber.behavior.path', 'Sulu\\Component\\DocumentManager\\Subscriber\\Behavior\\Mapping\\PathSubscriber');
        $instance->addSubscriberService('sulu_document_manager.subscriber.behavior.filing', 'Sulu\\Component\\Content\\Document\\Subscriber\\StructureTypeFilingSubscriber');
        $instance->addSubscriberService('sulu_document_manager.subscriber.behavior.alias', 'Sulu\\Component\\DocumentManager\\Subscriber\\Behavior\\Path\\AliasFilingSubscriber');
        $instance->addSubscriberService('sulu_document_manager.subscriber.behavior.base_path', 'Sulu\\Component\\DocumentManager\\Subscriber\\Behavior\\Path\\BasePathSubscriber');
        $instance->addSubscriberService('sulu_custom_urls.subscriber', 'Sulu\\Component\\CustomUrl\\Document\\Subscriber\\CustomUrlSubscriber');
        $instance->addSubscriberService('sulu_custom_urls.invalidate.subscriber', 'Sulu\\Component\\CustomUrl\\Document\\Subscriber\\InvalidateSubscriber');

        return $instance;
    }

    /**
     * Gets the 'sulu_document_manager.initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Initializer\Initializer A Sulu\Bundle\DocumentManagerBundle\Initializer\Initializer instance.
     */
    protected function getSuluDocumentManager_InitializerService()
    {
        return $this->services['sulu_document_manager.initializer'] = new \Sulu\Bundle\DocumentManagerBundle\Initializer\Initializer($this, $this->get('sulu_document_manager.initializer.root_path_purger'), array('sulu_core.webspace.document_manager.webspace_initializer' => 0, 'sulu_snippet.document.snippet_initializer' => 0, 'sulu_content.document_manager.content_initializer' => 127, 'sulu_document_manager.initializer.workspace' => 255, 'sulu_custom_urls.initializer' => 0));
    }

    /**
     * Gets the 'sulu_document_manager.initializer.root_path_purger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Initializer\RootPathPurger A Sulu\Bundle\DocumentManagerBundle\Initializer\RootPathPurger instance.
     */
    protected function getSuluDocumentManager_Initializer_RootPathPurgerService()
    {
        return $this->services['sulu_document_manager.initializer.root_path_purger'] = new \Sulu\Bundle\DocumentManagerBundle\Initializer\RootPathPurger($this->get('doctrine_phpcr'), $this->get('sulu_document_manager.path_segment_registry'), 'base');
    }

    /**
     * Gets the 'sulu_document_manager.initializer.workspace' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Initializer\WorkspaceInitializer A Sulu\Bundle\DocumentManagerBundle\Initializer\WorkspaceInitializer instance.
     */
    protected function getSuluDocumentManager_Initializer_WorkspaceService()
    {
        return $this->services['sulu_document_manager.initializer.workspace'] = new \Sulu\Bundle\DocumentManagerBundle\Initializer\WorkspaceInitializer($this->get('doctrine_phpcr'));
    }

    /**
     * Gets the 'sulu_document_manager.path_segment_registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\PathSegmentRegistry A Sulu\Component\DocumentManager\PathSegmentRegistry instance.
     */
    protected function getSuluDocumentManager_PathSegmentRegistryService()
    {
        return $this->services['sulu_document_manager.path_segment_registry'] = new \Sulu\Component\DocumentManager\PathSegmentRegistry(array('custom_urls' => 'custom-urls', 'custom_urls_items' => 'items', 'custom_urls_routes' => 'routes', 'base' => 'cmf', 'content' => 'contents', 'route' => 'routes', 'snippet' => 'snippets'));
    }

    /**
     * Gets the 'sulu_document_manager.proxy_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\ProxyFactory A Sulu\Component\DocumentManager\ProxyFactory instance.
     */
    protected function getSuluDocumentManager_ProxyFactoryService()
    {
        return $this->services['sulu_document_manager.proxy_factory'] = new \Sulu\Component\DocumentManager\ProxyFactory($this->get('sulu_document_manager.proxy_manager.factory.ghost'), $this->get('sulu_document_manager.event_dispatcher'), $this->get('sulu_document_manager.document_registry'), $this->get('sulu_document_manager.metadata_factory'));
    }

    /**
     * Gets the 'sulu_document_manager.proxy_manager.cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\CacheWarmer\ProxyCacheWarmer A Sulu\Bundle\DocumentManagerBundle\CacheWarmer\ProxyCacheWarmer instance.
     */
    protected function getSuluDocumentManager_ProxyManager_CacheWarmerService()
    {
        return $this->services['sulu_document_manager.proxy_manager.cache_warmer'] = new \Sulu\Bundle\DocumentManagerBundle\CacheWarmer\ProxyCacheWarmer($this->get('sulu_document_manager.proxy_manager.configuration'));
    }

    /**
     * Gets the 'sulu_document_manager.proxy_manager.factory.ghost' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ProxyManager\Factory\LazyLoadingGhostFactory A ProxyManager\Factory\LazyLoadingGhostFactory instance.
     */
    protected function getSuluDocumentManager_ProxyManager_Factory_GhostService()
    {
        return $this->services['sulu_document_manager.proxy_manager.factory.ghost'] = new \ProxyManager\Factory\LazyLoadingGhostFactory($this->get('sulu_document_manager.proxy_manager.configuration'));
    }

    /**
     * Gets the 'sulu_document_manager.serializer.handler.children_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Bridge\Serializer\Handler\ChildrenCollectionHandler A Sulu\Bundle\DocumentManagerBundle\Bridge\Serializer\Handler\ChildrenCollectionHandler instance.
     */
    protected function getSuluDocumentManager_Serializer_Handler_ChildrenCollectionService()
    {
        return $this->services['sulu_document_manager.serializer.handler.children_collection'] = new \Sulu\Bundle\DocumentManagerBundle\Bridge\Serializer\Handler\ChildrenCollectionHandler();
    }

    /**
     * Gets the 'sulu_document_manager.serializer.subscriber.children_behavior' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Bridge\Serializer\Subscriber\ChildrenSubscriber A Sulu\Bundle\DocumentManagerBundle\Bridge\Serializer\Subscriber\ChildrenSubscriber instance.
     */
    protected function getSuluDocumentManager_Serializer_Subscriber_ChildrenBehaviorService()
    {
        return $this->services['sulu_document_manager.serializer.subscriber.children_behavior'] = new \Sulu\Bundle\DocumentManagerBundle\Bridge\Serializer\Subscriber\ChildrenSubscriber($this->get('sulu_document_manager.document_inspector'), $this->get('sulu_document_manager.document_registry'));
    }

    /**
     * Gets the 'sulu_document_manager.serializer.subscriber.document' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Bridge\Serializer\Subscriber\DocumentSubscriber A Sulu\Bundle\DocumentManagerBundle\Bridge\Serializer\Subscriber\DocumentSubscriber instance.
     */
    protected function getSuluDocumentManager_Serializer_Subscriber_DocumentService()
    {
        return $this->services['sulu_document_manager.serializer.subscriber.document'] = new \Sulu\Bundle\DocumentManagerBundle\Bridge\Serializer\Subscriber\DocumentSubscriber($this->get('sulu_document_manager.document_registry'), $this->get('sulu_document_manager.node_manager'), $this->get('sulu_document_manager.metadata_factory'));
    }

    /**
     * Gets the 'sulu_document_manager.serializer.subscriber.proxy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Bridge\Serializer\Subscriber\ProxySubscriber A Sulu\Bundle\DocumentManagerBundle\Bridge\Serializer\Subscriber\ProxySubscriber instance.
     */
    protected function getSuluDocumentManager_Serializer_Subscriber_ProxyService()
    {
        return $this->services['sulu_document_manager.serializer.subscriber.proxy'] = new \Sulu\Bundle\DocumentManagerBundle\Bridge\Serializer\Subscriber\ProxySubscriber();
    }

    /**
     * Gets the 'sulu_document_manager.subscriber.behavior.alias' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Behavior\Path\AliasFilingSubscriber A Sulu\Component\DocumentManager\Subscriber\Behavior\Path\AliasFilingSubscriber instance.
     */
    protected function getSuluDocumentManager_Subscriber_Behavior_AliasService()
    {
        return $this->services['sulu_document_manager.subscriber.behavior.alias'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Path\AliasFilingSubscriber($this->get('sulu_document_manager.node_manager'), $this->get('sulu_document_manager.metadata_factory.base'));
    }

    /**
     * Gets the 'sulu_document_manager.subscriber.behavior.auto_name' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Behavior\Path\AutoNameSubscriber A Sulu\Component\DocumentManager\Subscriber\Behavior\Path\AutoNameSubscriber instance.
     */
    protected function getSuluDocumentManager_Subscriber_Behavior_AutoNameService()
    {
        return $this->services['sulu_document_manager.subscriber.behavior.auto_name'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Path\AutoNameSubscriber($this->get('sulu_document_manager.document_registry'), new \Symfony\Cmf\Bundle\CoreBundle\Slugifier\CallbackSlugifier('Ferrandini\\Urlizer::urlize'), new \Sulu\Component\DocumentManager\NameResolver(), $this->get('sulu_document_manager.node_manager'), $this->get('sulu_document_manager.document_strategy'));
    }

    /**
     * Gets the 'sulu_document_manager.subscriber.behavior.base_path' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Behavior\Path\BasePathSubscriber A Sulu\Component\DocumentManager\Subscriber\Behavior\Path\BasePathSubscriber instance.
     */
    protected function getSuluDocumentManager_Subscriber_Behavior_BasePathService()
    {
        return $this->services['sulu_document_manager.subscriber.behavior.base_path'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Path\BasePathSubscriber($this->get('sulu_document_manager.node_manager'), '/cmf');
    }

    /**
     * Gets the 'sulu_document_manager.subscriber.behavior.filing' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\StructureTypeFilingSubscriber A Sulu\Component\Content\Document\Subscriber\StructureTypeFilingSubscriber instance.
     */
    protected function getSuluDocumentManager_Subscriber_Behavior_FilingService()
    {
        return $this->services['sulu_document_manager.subscriber.behavior.filing'] = new \Sulu\Component\Content\Document\Subscriber\StructureTypeFilingSubscriber($this->get('sulu_document_manager.node_manager'));
    }

    /**
     * Gets the 'sulu_document_manager.subscriber.behavior.path' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\PathSubscriber A Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\PathSubscriber instance.
     */
    protected function getSuluDocumentManager_Subscriber_Behavior_PathService()
    {
        return $this->services['sulu_document_manager.subscriber.behavior.path'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\PathSubscriber($this->get('sulu_document_manager.document_inspector'));
    }

    /**
     * Gets the 'sulu_document_manager.subscriber.behavior.path.explicit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Behavior\Path\ExplicitSubscriber A Sulu\Component\DocumentManager\Subscriber\Behavior\Path\ExplicitSubscriber instance.
     */
    protected function getSuluDocumentManager_Subscriber_Behavior_Path_ExplicitService()
    {
        return $this->services['sulu_document_manager.subscriber.behavior.path.explicit'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Path\ExplicitSubscriber($this->get('sulu_document_manager.document_strategy'), $this->get('sulu_document_manager.node_manager'));
    }

    /**
     * Gets the 'sulu_document_manager.subscriber.behavior.remove_content' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\StructureRemoveSubscriber A Sulu\Component\Content\Document\Subscriber\StructureRemoveSubscriber instance.
     */
    protected function getSuluDocumentManager_Subscriber_Behavior_RemoveContentService()
    {
        return $this->services['sulu_document_manager.subscriber.behavior.remove_content'] = new \Sulu\Component\Content\Document\Subscriber\StructureRemoveSubscriber($this->get('sulu_document_manager.document_manager'), $this->get('sulu_document_manager.document_inspector'), $this->get('sulu_document_manager.metadata_factory'));
    }

    /**
     * Gets the 'sulu_document_manager.subscriber.core.instantiator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Core\InstantiatorSubscriber A Sulu\Component\DocumentManager\Subscriber\Core\InstantiatorSubscriber instance.
     */
    protected function getSuluDocumentManager_Subscriber_Core_InstantiatorService()
    {
        return $this->services['sulu_document_manager.subscriber.core.instantiator'] = new \Sulu\Component\DocumentManager\Subscriber\Core\InstantiatorSubscriber($this->get('sulu_document_manager.metadata_factory'));
    }

    /**
     * Gets the 'sulu_document_manager.subscriber.core.mapping' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Core\MappingSubscriber A Sulu\Component\DocumentManager\Subscriber\Core\MappingSubscriber instance.
     */
    protected function getSuluDocumentManager_Subscriber_Core_MappingService()
    {
        return $this->services['sulu_document_manager.subscriber.core.mapping'] = new \Sulu\Component\DocumentManager\Subscriber\Core\MappingSubscriber($this->get('sulu_document_manager.metadata_factory'), $this->get('sulu_document_manager.property_encoder'), $this->get('sulu_document_manager.proxy_factory'), $this->get('sulu_document_manager.document_registry'));
    }

    /**
     * Gets the 'sulu_document_manager.subscriber.core.registrator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Core\RegistratorSubscriber A Sulu\Component\DocumentManager\Subscriber\Core\RegistratorSubscriber instance.
     */
    protected function getSuluDocumentManager_Subscriber_Core_RegistratorService()
    {
        return $this->services['sulu_document_manager.subscriber.core.registrator'] = new \Sulu\Component\DocumentManager\Subscriber\Core\RegistratorSubscriber($this->get('sulu_document_manager.document_registry'));
    }

    /**
     * Gets the 'sulu_document_manager.subscriber.phpcr.find' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Phpcr\FindSubscriber A Sulu\Component\DocumentManager\Subscriber\Phpcr\FindSubscriber instance.
     */
    protected function getSuluDocumentManager_Subscriber_Phpcr_FindService()
    {
        return $this->services['sulu_document_manager.subscriber.phpcr.find'] = new \Sulu\Component\DocumentManager\Subscriber\Phpcr\FindSubscriber($this->get('sulu_document_manager.metadata_factory'), $this->get('sulu_document_manager.node_manager'), $this->get('sulu_document_manager.event_dispatcher'));
    }

    /**
     * Gets the 'sulu_document_manager.subscriber.phpcr.general' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Phpcr\GeneralSubscriber A Sulu\Component\DocumentManager\Subscriber\Phpcr\GeneralSubscriber instance.
     */
    protected function getSuluDocumentManager_Subscriber_Phpcr_GeneralService()
    {
        return $this->services['sulu_document_manager.subscriber.phpcr.general'] = new \Sulu\Component\DocumentManager\Subscriber\Phpcr\GeneralSubscriber($this->get('sulu_document_manager.document_registry'), $this->get('sulu_document_manager.node_manager'), $this->get('sulu_document_manager.event_dispatcher'));
    }

    /**
     * Gets the 'sulu_document_manager.subscriber.phpcr.query' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Phpcr\QuerySubscriber A Sulu\Component\DocumentManager\Subscriber\Phpcr\QuerySubscriber instance.
     */
    protected function getSuluDocumentManager_Subscriber_Phpcr_QueryService()
    {
        return $this->services['sulu_document_manager.subscriber.phpcr.query'] = new \Sulu\Component\DocumentManager\Subscriber\Phpcr\QuerySubscriber($this->get('doctrine_phpcr.default_session'), $this->get('sulu_document_manager.event_dispatcher'));
    }

    /**
     * Gets the 'sulu_document_manager.subscriber.phpcr.remove' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Phpcr\RemoveSubscriber A Sulu\Component\DocumentManager\Subscriber\Phpcr\RemoveSubscriber instance.
     */
    protected function getSuluDocumentManager_Subscriber_Phpcr_RemoveService()
    {
        return $this->services['sulu_document_manager.subscriber.phpcr.remove'] = new \Sulu\Component\DocumentManager\Subscriber\Phpcr\RemoveSubscriber($this->get('sulu_document_manager.document_registry'), $this->get('sulu_document_manager.node_manager'));
    }

    /**
     * Gets the 'sulu_document_manager.subscriber.phpcr.reorder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Phpcr\ReorderSubscriber A Sulu\Component\DocumentManager\Subscriber\Phpcr\ReorderSubscriber instance.
     */
    protected function getSuluDocumentManager_Subscriber_Phpcr_ReorderService()
    {
        return $this->services['sulu_document_manager.subscriber.phpcr.reorder'] = new \Sulu\Component\DocumentManager\Subscriber\Phpcr\ReorderSubscriber($this->get('sulu_document_manager.node_manager'), $this->get('sulu_document_manager.document_registry'));
    }

    /**
     * Gets the 'sulu_document_manager.suscriber.behavior.blame' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\BlameSubscriber A Sulu\Component\Content\Document\Subscriber\BlameSubscriber instance.
     */
    protected function getSuluDocumentManager_Suscriber_Behavior_BlameService()
    {
        return $this->services['sulu_document_manager.suscriber.behavior.blame'] = new \Sulu\Component\Content\Document\Subscriber\BlameSubscriber(NULL);
    }

    /**
     * Gets the 'sulu_document_manager.suscriber.behavior.children' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\ChildrenSubscriber A Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\ChildrenSubscriber instance.
     */
    protected function getSuluDocumentManager_Suscriber_Behavior_ChildrenService()
    {
        return $this->services['sulu_document_manager.suscriber.behavior.children'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\ChildrenSubscriber($this->get('sulu_document_manager.proxy_factory'));
    }

    /**
     * Gets the 'sulu_document_manager.suscriber.behavior.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\LocaleSubscriber A Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\LocaleSubscriber instance.
     */
    protected function getSuluDocumentManager_Suscriber_Behavior_LocaleService()
    {
        return $this->services['sulu_document_manager.suscriber.behavior.locale'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\LocaleSubscriber($this->get('sulu_document_manager.document_registry'));
    }

    /**
     * Gets the 'sulu_document_manager.suscriber.behavior.node_name' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\NodeNameSubscriber A Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\NodeNameSubscriber instance.
     */
    protected function getSuluDocumentManager_Suscriber_Behavior_NodeNameService()
    {
        return $this->services['sulu_document_manager.suscriber.behavior.node_name'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\NodeNameSubscriber();
    }

    /**
     * Gets the 'sulu_document_manager.suscriber.behavior.parent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\ParentSubscriber A Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\ParentSubscriber instance.
     */
    protected function getSuluDocumentManager_Suscriber_Behavior_ParentService()
    {
        return $this->services['sulu_document_manager.suscriber.behavior.parent'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\ParentSubscriber($this->get('sulu_document_manager.proxy_factory'), $this->get('sulu_document_manager.document_inspector'), $this->get('sulu_document_manager.document_manager'));
    }

    /**
     * Gets the 'sulu_document_manager.suscriber.behavior.timestamp' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Behavior\Audit\TimestampSubscriber A Sulu\Component\DocumentManager\Subscriber\Behavior\Audit\TimestampSubscriber instance.
     */
    protected function getSuluDocumentManager_Suscriber_Behavior_TimestampService()
    {
        return $this->services['sulu_document_manager.suscriber.behavior.timestamp'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Audit\TimestampSubscriber($this->get('sulu_document_manager.property_encoder'));
    }

    /**
     * Gets the 'sulu_document_manager.suscriber.behavior.uuid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\UuidSubscriber A Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\UuidSubscriber instance.
     */
    protected function getSuluDocumentManager_Suscriber_Behavior_UuidService()
    {
        return $this->services['sulu_document_manager.suscriber.behavior.uuid'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\UuidSubscriber();
    }

    /**
     * Gets the 'sulu_hash.auditable_hasher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Hash\AuditableHasher A Sulu\Component\Hash\AuditableHasher instance.
     */
    protected function getSuluHash_AuditableHasherService()
    {
        return $this->services['sulu_hash.auditable_hasher'] = new \Sulu\Component\Hash\AuditableHasher();
    }

    /**
     * Gets the 'sulu_hash.event_subscriber.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Hash\Serializer\Subscriber\HashSerializeEventSubscriber A Sulu\Component\Hash\Serializer\Subscriber\HashSerializeEventSubscriber instance.
     */
    protected function getSuluHash_EventSubscriber_SerializerService()
    {
        return $this->services['sulu_hash.event_subscriber.serializer'] = new \Sulu\Component\Hash\Serializer\Subscriber\HashSerializeEventSubscriber($this->get('sulu_hash.auditable_hasher'));
    }

    /**
     * Gets the 'sulu_hash.request_hash_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Hash\RequestHashChecker A Sulu\Component\Hash\RequestHashChecker instance.
     */
    protected function getSuluHash_RequestHashCheckerService()
    {
        return $this->services['sulu_hash.request_hash_checker'] = new \Sulu\Component\Hash\RequestHashChecker($this->get('sulu_hash.auditable_hasher'));
    }

    /**
     * Gets the 'sulu_http_cache.event_subscriber.content_mapper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\HttpCache\EventSubscriber\ContentMapperSubscriber A Sulu\Component\HttpCache\EventSubscriber\ContentMapperSubscriber instance.
     */
    protected function getSuluHttpCache_EventSubscriber_ContentMapperService()
    {
        return $this->services['sulu_http_cache.event_subscriber.content_mapper'] = new \Sulu\Component\HttpCache\EventSubscriber\ContentMapperSubscriber($this->get('sulu_http_cache.handler.aggregate'));
    }

    /**
     * Gets the 'sulu_http_cache.event_subscriber.flush' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\HttpCache\EventSubscriber\FlushSubscriber A Sulu\Component\HttpCache\EventSubscriber\FlushSubscriber instance.
     */
    protected function getSuluHttpCache_EventSubscriber_FlushService()
    {
        return $this->services['sulu_http_cache.event_subscriber.flush'] = new \Sulu\Component\HttpCache\EventSubscriber\FlushSubscriber($this->get('sulu_http_cache.handler.aggregate'));
    }

    /**
     * Gets the 'sulu_http_cache.event_subscriber.update_response' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\HttpCache\EventSubscriber\UpdateResponseSubscriber A Sulu\Component\HttpCache\EventSubscriber\UpdateResponseSubscriber instance.
     */
    protected function getSuluHttpCache_EventSubscriber_UpdateResponseService()
    {
        return $this->services['sulu_http_cache.event_subscriber.update_response'] = new \Sulu\Component\HttpCache\EventSubscriber\UpdateResponseSubscriber($this->get('sulu_http_cache.handler.aggregate'));
    }

    /**
     * Gets the 'sulu_http_cache.handler.aggregate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\HttpCache\Handler\AggregateHandler A Sulu\Component\HttpCache\Handler\AggregateHandler instance.
     */
    protected function getSuluHttpCache_Handler_AggregateService()
    {
        return $this->services['sulu_http_cache.handler.aggregate'] = new \Sulu\Component\HttpCache\Handler\AggregateHandler(array(0 => $this->get('sulu_http_cache.handler.paths'), 1 => $this->get('sulu_http_cache.handler.public'), 2 => $this->get('sulu_http_cache.handler.debug')), $this->get('logger'));
    }

    /**
     * Gets the 'sulu_http_cache.handler.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\HttpCache\Handler\DebugHandler A Sulu\Component\HttpCache\Handler\DebugHandler instance.
     */
    protected function getSuluHttpCache_Handler_DebugService()
    {
        return $this->services['sulu_http_cache.handler.debug'] = new \Sulu\Component\HttpCache\Handler\DebugHandler(array(0 => 'paths', 1 => 'public', 2 => 'debug'), 'symfony');
    }

    /**
     * Gets the 'sulu_http_cache.handler.paths' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\HttpCache\Handler\PathsHandler A Sulu\Component\HttpCache\Handler\PathsHandler instance.
     */
    protected function getSuluHttpCache_Handler_PathsService()
    {
        return $this->services['sulu_http_cache.handler.paths'] = new \Sulu\Component\HttpCache\Handler\PathsHandler($this->get('sulu_core.webspace.webspace_manager'), $this->get('sulu_http_cache.proxy_client.symfony'), 'dev');
    }

    /**
     * Gets the 'sulu_http_cache.handler.public' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\HttpCache\Handler\PublicHandler A Sulu\Component\HttpCache\Handler\PublicHandler instance.
     */
    protected function getSuluHttpCache_Handler_PublicService()
    {
        return $this->services['sulu_http_cache.handler.public'] = new \Sulu\Component\HttpCache\Handler\PublicHandler(240, 240, true);
    }

    /**
     * Gets the 'sulu_http_cache.proxy_client.symfony' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\HttpCache\ProxyClient\Symfony A Sulu\Component\HttpCache\ProxyClient\Symfony instance.
     */
    protected function getSuluHttpCache_ProxyClient_SymfonyService()
    {
        return $this->services['sulu_http_cache.proxy_client.symfony'] = new \Sulu\Component\HttpCache\ProxyClient\Symfony();
    }

    /**
     * Gets the 'sulu_http_cache.proxy_client.varnish' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\HttpCache\ProxyClient\Varnish A FOS\HttpCache\ProxyClient\Varnish instance.
     */
    protected function getSuluHttpCache_ProxyClient_VarnishService()
    {
        return $this->services['sulu_http_cache.proxy_client.varnish'] = new \FOS\HttpCache\ProxyClient\Varnish(array(), NULL);
    }

    /**
     * Gets the 'sulu_location.content.type.location' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\LocationBundle\Content\Types\LocationContentType A Sulu\Bundle\LocationBundle\Content\Types\LocationContentType instance.
     */
    protected function getSuluLocation_Content_Type_LocationService()
    {
        return $this->services['sulu_location.content.type.location'] = new \Sulu\Bundle\LocationBundle\Content\Types\LocationContentType($this->get('sulu_content.node_repository'), 'SuluLocationBundle:Template:content-types/location.html.twig', $this->get('sulu_location.map_manager'), 'nominatim');
    }

    /**
     * Gets the 'sulu_location.gelocator.service.nominatim' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\LocationBundle\Geolocator\Service\NominatimGeolocator A Sulu\Bundle\LocationBundle\Geolocator\Service\NominatimGeolocator instance.
     */
    protected function getSuluLocation_Gelocator_Service_NominatimService()
    {
        return $this->services['sulu_location.gelocator.service.nominatim'] = new \Sulu\Bundle\LocationBundle\Geolocator\Service\NominatimGeolocator($this->get('sulu_location.geolocator.guzzle.client'), 'http://open.mapquestapi.com/nominatim/v1/search.php');
    }

    /**
     * Gets the 'sulu_location.geolocator.guzzle.client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Guzzle\Http\Client A Guzzle\Http\Client instance.
     */
    protected function getSuluLocation_Geolocator_Guzzle_ClientService()
    {
        $this->services['sulu_location.geolocator.guzzle.client'] = $instance = new \Guzzle\Http\Client();

        $instance->addSubscriber($this->get('sulu_location.geolocator.guzzle.log_subscriber'));

        return $instance;
    }

    /**
     * Gets the 'sulu_location.geolocator.guzzle.log_adapter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Guzzle\Log\PsrLogAdapter A Guzzle\Log\PsrLogAdapter instance.
     */
    protected function getSuluLocation_Geolocator_Guzzle_LogAdapterService()
    {
        return $this->services['sulu_location.geolocator.guzzle.log_adapter'] = new \Guzzle\Log\PsrLogAdapter($this->get('monolog.logger.sululocation_geolocator'));
    }

    /**
     * Gets the 'sulu_location.geolocator.guzzle.log_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Guzzle\Plugin\Log\LogPlugin A Guzzle\Plugin\Log\LogPlugin instance.
     */
    protected function getSuluLocation_Geolocator_Guzzle_LogSubscriberService()
    {
        return $this->services['sulu_location.geolocator.guzzle.log_subscriber'] = new \Guzzle\Plugin\Log\LogPlugin($this->get('sulu_location.geolocator.guzzle.log_adapter'));
    }

    /**
     * Gets the 'sulu_location.geolocator.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\LocationBundle\Geolocator\GeolocatorManager A Sulu\Bundle\LocationBundle\Geolocator\GeolocatorManager instance.
     */
    protected function getSuluLocation_Geolocator_ManagerService()
    {
        $this->services['sulu_location.geolocator.manager'] = $instance = new \Sulu\Bundle\LocationBundle\Geolocator\GeolocatorManager($this);

        $instance->register('nominatim', 'sulu_location.gelocator.service.nominatim');
        $instance->register('google', 'sulu_location.geolocator.service.google');

        return $instance;
    }

    /**
     * Gets the 'sulu_location.geolocator.service.google' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\LocationBundle\Geolocator\Service\GoogleGeolocator A Sulu\Bundle\LocationBundle\Geolocator\Service\GoogleGeolocator instance.
     */
    protected function getSuluLocation_Geolocator_Service_GoogleService()
    {
        return $this->services['sulu_location.geolocator.service.google'] = new \Sulu\Bundle\LocationBundle\Geolocator\Service\GoogleGeolocator($this->get('sulu_location.geolocator.guzzle.client'), '');
    }

    /**
     * Gets the 'sulu_location.map_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\LocationBundle\Map\MapManager A Sulu\Bundle\LocationBundle\Map\MapManager instance.
     */
    protected function getSuluLocation_MapManagerService()
    {
        $this->services['sulu_location.map_manager'] = $instance = new \Sulu\Bundle\LocationBundle\Map\MapManager();

        $instance->registerProvider('leaflet', array('title' => 'Leaflet (OSM)'));
        $instance->registerProvider('google', array('title' => 'Google Maps', 'api_key' => NULL));
        $instance->registerGeolocator('nominatim', array('endpoint' => 'http://open.mapquestapi.com/nominatim/v1/search.php'));
        $instance->registerGeolocator('google', array('api_key' => ''));
        $instance->setDefaultProviderName('leaflet');

        return $instance;
    }

    /**
     * Gets the 'sulu_media.collection_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Collection\Manager\CollectionManager A Sulu\Bundle\MediaBundle\Collection\Manager\CollectionManager instance.
     */
    protected function getSuluMedia_CollectionManagerService()
    {
        return $this->services['sulu_media.collection_manager'] = new \Sulu\Bundle\MediaBundle\Collection\Manager\CollectionManager($this->get('sulu_media.collection_repository'), $this->get('sulu_media.media_repository'), $this->get('sulu_media.format_manager'), $this->get('sulu.repository.user'), $this->get('doctrine.orm.default_entity_manager'), NULL, '50x50', array('view' => 64, 'add' => 32, 'edit' => 16, 'delete' => 8, 'archive' => 4, 'live' => 2, 'security' => 1));
    }

    /**
     * Gets the 'sulu_media.collection_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Entity\CollectionRepository A Sulu\Bundle\MediaBundle\Entity\CollectionRepository instance.
     */
    protected function getSuluMedia_CollectionRepositoryService()
    {
        return $this->services['sulu_media.collection_repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('SuluMediaBundle:Collection');
    }

    /**
     * Gets the 'sulu_media.file_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\FileValidator\FileValidator A Sulu\Bundle\MediaBundle\Media\FileValidator\FileValidator instance.
     */
    protected function getSuluMedia_FileValidatorService()
    {
        return $this->services['sulu_media.file_validator'] = new \Sulu\Bundle\MediaBundle\Media\FileValidator\FileValidator();
    }

    /**
     * Gets the 'sulu_media.file_version_meta_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Entity\FileVersionMetaRepository A Sulu\Bundle\MediaBundle\Entity\FileVersionMetaRepository instance.
     */
    protected function getSuluMedia_FileVersionMetaRepositoryService()
    {
        return $this->services['sulu_media.file_version_meta_repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('SuluMediaBundle:FileVersionMeta');
    }

    /**
     * Gets the 'sulu_media.format_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\FormatCache\LocalFormatCache A Sulu\Bundle\MediaBundle\Media\FormatCache\LocalFormatCache instance.
     */
    protected function getSuluMedia_FormatCacheService()
    {
        return $this->services['sulu_media.format_cache'] = new \Sulu\Bundle\MediaBundle\Media\FormatCache\LocalFormatCache($this->get('filesystem'), ($this->targetDirs[3].'/../web/uploads/media'), '/uploads/media/{slug}', 10, array('400x400' => array('name' => '400x400', 'commands' => array(0 => array('action' => 'scale', 'parameters' => array('x' => '400', 'y' => '400'))), 'options' => array()), '400x400-inset' => array('name' => '400x400-inset', 'commands' => array(0 => array('action' => 'scale', 'parameters' => array('x' => '400', 'y' => '400', 'mode' => 'inset'))), 'options' => array()), '200x200' => array('name' => '200x200', 'commands' => array(0 => array('action' => 'scale', 'parameters' => array('x' => '200', 'y' => '200'))), 'options' => array()), '190x' => array('name' => '190x', 'commands' => array(0 => array('action' => 'scale', 'parameters' => array('x' => '190'))), 'options' => array()), '170x170' => array('name' => '170x170', 'commands' => array(0 => array('action' => 'scale', 'parameters' => array('x' => '170', 'y' => '170'))), 'options' => array()), '150x100' => array('name' => '150x100', 'commands' => array(0 => array('action' => 'scale', 'parameters' => array('x' => '150', 'y' => '100'))), 'options' => array()), '100x100' => array('name' => '100x100', 'commands' => array(0 => array('action' => 'scale', 'parameters' => array('x' => '100', 'y' => '100'))), 'options' => array()), '100x100-inset' => array('name' => '100x100-inset', 'commands' => array(0 => array('action' => 'scale', 'parameters' => array('x' => '100', 'y' => '100', 'mode' => 'inset'))), 'options' => array()), '50x50' => array('name' => '50x50', 'commands' => array(0 => array('action' => 'scale', 'parameters' => array('x' => '50', 'y' => '50'))), 'options' => array()), '640x480' => array('name' => '640x480', 'commands' => array(0 => array('action' => 'resize', 'parameters' => array('x' => '640', 'y' => '480'))), 'options' => array())));
    }

    /**
     * Gets the 'sulu_media.format_cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\FormatCache\FormatCacheClearer A Sulu\Bundle\MediaBundle\Media\FormatCache\FormatCacheClearer instance.
     */
    protected function getSuluMedia_FormatCacheClearerService()
    {
        $this->services['sulu_media.format_cache_clearer'] = $instance = new \Sulu\Bundle\MediaBundle\Media\FormatCache\FormatCacheClearer();

        $instance->add($this->get('sulu_media.format_cache'), 'local');

        return $instance;
    }

    /**
     * Gets the 'sulu_media.format_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\FormatManager\FormatManager A Sulu\Bundle\MediaBundle\Media\FormatManager\FormatManager instance.
     */
    protected function getSuluMedia_FormatManagerService()
    {
        return $this->services['sulu_media.format_manager'] = new \Sulu\Bundle\MediaBundle\Media\FormatManager\FormatManager($this->get('sulu_media.media_repository'), $this->get('sulu_media.storage'), $this->get('sulu_media.format_cache'), $this->get('sulu_media.image.converter'), $this->get('sulu_media.video_thumbnail_generator'), 'gs', true, array(0 => 'image/*', 1 => 'video/*', 2 => 'application/pdf'), array('Expires' => '+1 month', 'Pragma' => 'public', 'Cache-Control' => 'public'), array('400x400' => array('name' => '400x400', 'commands' => array(0 => array('action' => 'scale', 'parameters' => array('x' => '400', 'y' => '400'))), 'options' => array()), '400x400-inset' => array('name' => '400x400-inset', 'commands' => array(0 => array('action' => 'scale', 'parameters' => array('x' => '400', 'y' => '400', 'mode' => 'inset'))), 'options' => array()), '200x200' => array('name' => '200x200', 'commands' => array(0 => array('action' => 'scale', 'parameters' => array('x' => '200', 'y' => '200'))), 'options' => array()), '190x' => array('name' => '190x', 'commands' => array(0 => array('action' => 'scale', 'parameters' => array('x' => '190'))), 'options' => array()), '170x170' => array('name' => '170x170', 'commands' => array(0 => array('action' => 'scale', 'parameters' => array('x' => '170', 'y' => '170'))), 'options' => array()), '150x100' => array('name' => '150x100', 'commands' => array(0 => array('action' => 'scale', 'parameters' => array('x' => '150', 'y' => '100'))), 'options' => array()), '100x100' => array('name' => '100x100', 'commands' => array(0 => array('action' => 'scale', 'parameters' => array('x' => '100', 'y' => '100'))), 'options' => array()), '100x100-inset' => array('name' => '100x100-inset', 'commands' => array(0 => array('action' => 'scale', 'parameters' => array('x' => '100', 'y' => '100', 'mode' => 'inset'))), 'options' => array()), '50x50' => array('name' => '50x50', 'commands' => array(0 => array('action' => 'scale', 'parameters' => array('x' => '50', 'y' => '50'))), 'options' => array()), '640x480' => array('name' => '640x480', 'commands' => array(0 => array('action' => 'resize', 'parameters' => array('x' => '640', 'y' => '480'))), 'options' => array())));
    }

    /**
     * Gets the 'sulu_media.image.command.crop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\ImageConverter\Command\CropCommand A Sulu\Bundle\MediaBundle\Media\ImageConverter\Command\CropCommand instance.
     */
    protected function getSuluMedia_Image_Command_CropService()
    {
        return $this->services['sulu_media.image.command.crop'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Command\CropCommand();
    }

    /**
     * Gets the 'sulu_media.image.command.resize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\ImageConverter\Command\ResizeCommand A Sulu\Bundle\MediaBundle\Media\ImageConverter\Command\ResizeCommand instance.
     */
    protected function getSuluMedia_Image_Command_ResizeService()
    {
        return $this->services['sulu_media.image.command.resize'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Command\ResizeCommand();
    }

    /**
     * Gets the 'sulu_media.image.command.scale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\ImageConverter\Command\ScaleCommand A Sulu\Bundle\MediaBundle\Media\ImageConverter\Command\ScaleCommand instance.
     */
    protected function getSuluMedia_Image_Command_ScaleService()
    {
        return $this->services['sulu_media.image.command.scale'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Command\ScaleCommand();
    }

    /**
     * Gets the 'sulu_media.image.command_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\ImageConverter\Command\Manager\CommandManager A Sulu\Bundle\MediaBundle\Media\ImageConverter\Command\Manager\CommandManager instance.
     */
    protected function getSuluMedia_Image_CommandManagerService()
    {
        $this->services['sulu_media.image.command_manager'] = $instance = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\Command\Manager\CommandManager();

        $instance->add($this->get('sulu_media.image.command.resize'), 'resize');
        $instance->add($this->get('sulu_media.image.command.scale'), 'scale');
        $instance->add($this->get('sulu_media.image.command.crop'), 'crop');

        return $instance;
    }

    /**
     * Gets the 'sulu_media.image.converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\ImageConverter\ImagineImageConverter A Sulu\Bundle\MediaBundle\Media\ImageConverter\ImagineImageConverter instance.
     */
    protected function getSuluMedia_Image_ConverterService()
    {
        return $this->services['sulu_media.image.converter'] = new \Sulu\Bundle\MediaBundle\Media\ImageConverter\ImagineImageConverter($this->get('sulu_media.image.command_manager'));
    }

    /**
     * Gets the 'sulu_media.media_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\Manager\MediaManager A Sulu\Bundle\MediaBundle\Media\Manager\MediaManager instance.
     */
    protected function getSuluMedia_MediaManagerService()
    {
        return $this->services['sulu_media.media_manager'] = new \Sulu\Bundle\MediaBundle\Media\Manager\MediaManager($this->get('sulu_media.media_repository'), $this->get('sulu_media.collection_repository'), $this->get('sulu.repository.user'), $this->get('doctrine.orm.default_entity_manager'), $this->get('sulu_media.storage'), $this->get('sulu_media.file_validator'), $this->get('sulu_media.format_manager'), $this->get('sulu_tag.tag_manager'), $this->get('sulu_media.type_manager'), $this->get('sulu.content.path_cleaner'), NULL, NULL, $this->get('dubture_ffmpeg.ffprobe'), array('view' => 64, 'add' => 32, 'edit' => 16, 'delete' => 8, 'archive' => 4, 'live' => 2, 'security' => 1), '/media/{id}/download/{slug}', '16MB');
    }

    /**
     * Gets the 'sulu_media.media_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Entity\MediaRepository A Sulu\Bundle\MediaBundle\Entity\MediaRepository instance.
     */
    protected function getSuluMedia_MediaRepositoryService()
    {
        return $this->services['sulu_media.media_repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('SuluMediaBundle:Media');
    }

    /**
     * Gets the 'sulu_media.permission_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Search\EventListener\PermissionListener A Sulu\Bundle\MediaBundle\Search\EventListener\PermissionListener instance.
     */
    protected function getSuluMedia_PermissionListenerService()
    {
        return $this->services['sulu_media.permission_listener'] = new \Sulu\Bundle\MediaBundle\Search\EventListener\PermissionListener($this->get('sulu_media.file_version_meta_repository'), $this->get('massive_search.search_manager'));
    }

    /**
     * Gets the 'sulu_media.search.subscriber.media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Search\Subscriber\MediaSearchSubscriber A Sulu\Bundle\MediaBundle\Search\Subscriber\MediaSearchSubscriber instance.
     */
    protected function getSuluMedia_Search_Subscriber_MediaService()
    {
        return $this->services['sulu_media.search.subscriber.media'] = new \Sulu\Bundle\MediaBundle\Search\Subscriber\MediaSearchSubscriber($this->get('sulu_media.media_manager'), $this->get('sulu_search.search.factory'), $this->get('logger'), array(0 => 'image/*', 1 => 'video/*', 2 => 'application/pdf'), '170x170');
    }

    /**
     * Gets the 'sulu_media.search.subscriber.structure_media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Search\Subscriber\StructureMediaSearchSubscriber A Sulu\Bundle\MediaBundle\Search\Subscriber\StructureMediaSearchSubscriber instance.
     */
    protected function getSuluMedia_Search_Subscriber_StructureMediaService()
    {
        return $this->services['sulu_media.search.subscriber.structure_media'] = new \Sulu\Bundle\MediaBundle\Search\Subscriber\StructureMediaSearchSubscriber($this->get('sulu_media.media_manager'), $this->get('sulu_core.webspace.request_analyzer', ContainerInterface::NULL_ON_INVALID_REFERENCE), '170x170');
    }

    /**
     * Gets the 'sulu_media.security_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Security\Authorization\SecurityCondition A Sulu\Component\Security\Authorization\SecurityCondition instance.
     */
    protected function getSuluMedia_SecurityContextService()
    {
        return $this->services['sulu_media.security_context'] = new \Sulu\Component\Security\Authorization\SecurityCondition('sulu.media.collections');
    }

    /**
     * Gets the 'sulu_media.smart_content.data_provider.media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Media\SmartContent\MediaDataProvider A Sulu\Component\Media\SmartContent\MediaDataProvider instance.
     */
    protected function getSuluMedia_SmartContent_DataProvider_MediaService()
    {
        return $this->services['sulu_media.smart_content.data_provider.media'] = new \Sulu\Component\Media\SmartContent\MediaDataProvider($this->get('sulu_media.smart_content.data_provider.media.repository'), $this->get('sulu_media.collection_manager'), $this->get('jms_serializer'), $this->get('request_stack'));
    }

    /**
     * Gets the 'sulu_media.smart_content.data_provider.media.repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Entity\MediaDataProviderRepository A Sulu\Bundle\MediaBundle\Entity\MediaDataProviderRepository instance.
     */
    protected function getSuluMedia_SmartContent_DataProvider_Media_RepositoryService()
    {
        return $this->services['sulu_media.smart_content.data_provider.media.repository'] = new \Sulu\Bundle\MediaBundle\Entity\MediaDataProviderRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('sulu_media.media_manager'), 'SuluMediaBundle:Media', 'SuluMediaBundle:Collection');
    }

    /**
     * Gets the 'sulu_media.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\Storage\LocalStorage A Sulu\Bundle\MediaBundle\Media\Storage\LocalStorage instance.
     */
    protected function getSuluMedia_StorageService()
    {
        return $this->services['sulu_media.storage'] = new \Sulu\Bundle\MediaBundle\Media\Storage\LocalStorage(($this->targetDirs[3].'/../uploads/media'), 10, $this->get('sulu_media.storage.file_system'), $this->get('logger'));
    }

    /**
     * Gets the 'sulu_media.storage.file_system' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance.
     */
    protected function getSuluMedia_Storage_FileSystemService()
    {
        return $this->services['sulu_media.storage.file_system'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the 'sulu_media.system_collections.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Media\SystemCollections\SystemCollectionBuilder A Sulu\Component\Media\SystemCollections\SystemCollectionBuilder instance.
     */
    protected function getSuluMedia_SystemCollections_BuilderService()
    {
        return $this->services['sulu_media.system_collections.builder'] = new \Sulu\Component\Media\SystemCollections\SystemCollectionBuilder();
    }

    /**
     * Gets the 'sulu_media.system_collections.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Cache\DataCache A Sulu\Component\Cache\DataCache instance.
     */
    protected function getSuluMedia_SystemCollections_CacheService()
    {
        return $this->services['sulu_media.system_collections.cache'] = new \Sulu\Component\Cache\DataCache((__DIR__.'/sulu/system_collection.cache'));
    }

    /**
     * Gets the 'sulu_media.system_collections.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Media\SystemCollections\SystemCollectionManager A Sulu\Component\Media\SystemCollections\SystemCollectionManager instance.
     */
    protected function getSuluMedia_SystemCollections_ManagerService()
    {
        return $this->services['sulu_media.system_collections.manager'] = new \Sulu\Component\Media\SystemCollections\SystemCollectionManager(array('sulu_media' => array('meta_title' => array('en' => 'Sulu media', 'de' => 'Sulu Medien'), 'collections' => array('preview_image' => array('meta_title' => array('en' => 'Preview images', 'de' => 'Vorschaubilder')))), 'sulu_contact' => array('meta_title' => array('en' => 'Sulu contacts', 'de' => 'Sulu Kontakte'), 'collections' => array('contact' => array('meta_title' => array('en' => 'People', 'de' => 'Personen')), 'account' => array('meta_title' => array('en' => 'Organizations', 'de' => 'Organisationen'))))), $this->get('sulu_media.collection_manager'), $this->get('doctrine.orm.default_entity_manager'), NULL, $this->get('sulu_media.system_collections.cache'), 'en');
    }

    /**
     * Gets the 'sulu_media.twig_extension.disposition_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Twig\DispositionTypeTwigExtension A Sulu\Bundle\MediaBundle\Twig\DispositionTypeTwigExtension instance.
     */
    protected function getSuluMedia_TwigExtension_DispositionTypeService()
    {
        return $this->services['sulu_media.twig_extension.disposition_type'] = new \Sulu\Bundle\MediaBundle\Twig\DispositionTypeTwigExtension('attachment', array(), array());
    }

    /**
     * Gets the 'sulu_media.twig_extension.media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Twig\MediaTwigExtension A Sulu\Bundle\MediaBundle\Twig\MediaTwigExtension instance.
     */
    protected function getSuluMedia_TwigExtension_MediaService()
    {
        return $this->services['sulu_media.twig_extension.media'] = new \Sulu\Bundle\MediaBundle\Twig\MediaTwigExtension($this->get('sulu_media.media_manager'));
    }

    /**
     * Gets the 'sulu_media.type.media_selection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Content\Types\MediaSelectionContentType A Sulu\Bundle\MediaBundle\Content\Types\MediaSelectionContentType instance.
     */
    protected function getSuluMedia_Type_MediaSelectionService()
    {
        return $this->services['sulu_media.type.media_selection'] = new \Sulu\Bundle\MediaBundle\Content\Types\MediaSelectionContentType($this->get('sulu_media.media_manager'), 'SuluMediaBundle:Template:content-types/media-selection.html.twig');
    }

    /**
     * Gets the 'sulu_media.type_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\TypeManager\TypeManager A Sulu\Bundle\MediaBundle\Media\TypeManager\TypeManager instance.
     */
    protected function getSuluMedia_TypeManagerService()
    {
        return $this->services['sulu_media.type_manager'] = new \Sulu\Bundle\MediaBundle\Media\TypeManager\TypeManager($this->get('doctrine.orm.default_entity_manager'), array(0 => array('type' => 'document', 'mimeTypes' => array(0 => '*')), 1 => array('type' => 'image', 'mimeTypes' => array(0 => 'image/*')), 2 => array('type' => 'video', 'mimeTypes' => array(0 => 'video/*')), 3 => array('type' => 'audio', 'mimeTypes' => array(0 => 'audio/*'))), array(0 => 'file/exe'));
    }

    /**
     * Gets the 'sulu_media.video_thumbnail_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\Video\VideoThumbnailService A Sulu\Bundle\MediaBundle\Media\Video\VideoThumbnailService instance.
     */
    protected function getSuluMedia_VideoThumbnailGeneratorService()
    {
        return $this->services['sulu_media.video_thumbnail_generator'] = new \Sulu\Bundle\MediaBundle\Media\Video\VideoThumbnailService($this->get('dubture_ffmpeg.ffmpeg'));
    }

    /**
     * Gets the 'sulu_navigationcontext.document.subscriber.navigation_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\NavigationContextSubscriber A Sulu\Component\Content\Document\Subscriber\NavigationContextSubscriber instance.
     */
    protected function getSuluNavigationcontext_Document_Subscriber_NavigationContextService()
    {
        return $this->services['sulu_navigationcontext.document.subscriber.navigation_context'] = new \Sulu\Component\Content\Document\Subscriber\NavigationContextSubscriber();
    }

    /**
     * Gets the 'sulu_redirect_type.document.subscriber.redirect_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\RedirectTypeSubscriber A Sulu\Component\Content\Document\Subscriber\RedirectTypeSubscriber instance.
     */
    protected function getSuluRedirectType_Document_Subscriber_RedirectTypeService()
    {
        return $this->services['sulu_redirect_type.document.subscriber.redirect_type'] = new \Sulu\Component\Content\Document\Subscriber\RedirectTypeSubscriber();
    }

    /**
     * Gets the 'sulu_resource_segment.document.subscriber.resource_segment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\ResourceSegmentSubscriber A Sulu\Component\Content\Document\Subscriber\ResourceSegmentSubscriber instance.
     */
    protected function getSuluResourceSegment_Document_Subscriber_ResourceSegmentService()
    {
        $a = $this->get('sulu_document_manager.document_inspector');

        return $this->services['sulu_resource_segment.document.subscriber.resource_segment'] = new \Sulu\Component\Content\Document\Subscriber\ResourceSegmentSubscriber($this->get('sulu_document_manager.property_encoder'), $a, $this->get('sulu.content.rlp.strategy.tree'), $a);
    }

    /**
     * Gets the 'sulu_search.build.index' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SearchBundle\Build\IndexBuilder A Sulu\Bundle\SearchBundle\Build\IndexBuilder instance.
     */
    protected function getSuluSearch_Build_IndexService()
    {
        return $this->services['sulu_search.build.index'] = new \Sulu\Bundle\SearchBundle\Build\IndexBuilder();
    }

    /**
     * Gets the 'sulu_search.event_listener.hit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\ContentBundle\Search\EventListener\HitListener A Sulu\Bundle\ContentBundle\Search\EventListener\HitListener instance.
     */
    protected function getSuluSearch_EventListener_HitService()
    {
        return $this->services['sulu_search.event_listener.hit'] = new \Sulu\Bundle\ContentBundle\Search\EventListener\HitListener($this->get('sulu_core.webspace.request_analyzer'));
    }

    /**
     * Gets the 'sulu_search.index_configuration_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SearchBundle\Search\Configuration\IndexConfigurationProvider A Sulu\Bundle\SearchBundle\Search\Configuration\IndexConfigurationProvider instance.
     */
    protected function getSuluSearch_IndexConfigurationProviderService()
    {
        return $this->services['sulu_search.index_configuration_provider'] = new \Sulu\Bundle\SearchBundle\Search\Configuration\IndexConfigurationProvider(array('snippet' => array('security_context' => 'sulu.global.snippets'), 'media' => array('security_context' => 'sulu.media.collections'), 'contact' => array('security_context' => 'sulu.contact.people'), 'account' => array('security_context' => 'sulu.contact.organizations'), 'page_sulu_io' => array('security_context' => 'sulu.webspaces.sulu_io', 'name' => 'sulu.io')));
    }

    /**
     * Gets the 'sulu_search.search.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SearchBundle\Search\Factory A Sulu\Bundle\SearchBundle\Search\Factory instance.
     */
    protected function getSuluSearch_Search_FactoryService()
    {
        return $this->services['sulu_search.search.factory'] = new \Sulu\Bundle\SearchBundle\Search\Factory();
    }

    /**
     * Gets the 'sulu_security.access_control_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Security\Authorization\AccessControl\AccessControlManager A Sulu\Component\Security\Authorization\AccessControl\AccessControlManager instance.
     */
    protected function getSuluSecurity_AccessControlManagerService()
    {
        return $this->services['sulu_security.access_control_manager'] = new \Sulu\Component\Security\Authorization\AccessControl\AccessControlManager($this->get('sulu_security.mask_converter'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'sulu_security.authentication_entry_point' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Security\AuthenticationEntryPoint A Sulu\Bundle\SecurityBundle\Security\AuthenticationEntryPoint instance.
     */
    protected function getSuluSecurity_AuthenticationEntryPointService()
    {
        return $this->services['sulu_security.authentication_entry_point'] = new \Sulu\Bundle\SecurityBundle\Security\AuthenticationEntryPoint($this->get('cmf_routing.router'));
    }

    /**
     * Gets the 'sulu_security.authentication_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Security\AuthenticationHandler A Sulu\Bundle\SecurityBundle\Security\AuthenticationHandler instance.
     */
    protected function getSuluSecurity_AuthenticationHandlerService()
    {
        return $this->services['sulu_security.authentication_handler'] = new \Sulu\Bundle\SecurityBundle\Security\AuthenticationHandler($this->get('cmf_routing.router'), $this->get('session'));
    }

    /**
     * Gets the 'sulu_security.build.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Build\UserBuilder A Sulu\Bundle\SecurityBundle\Build\UserBuilder instance.
     */
    protected function getSuluSecurity_Build_UserService()
    {
        return $this->services['sulu_security.build.user'] = new \Sulu\Bundle\SecurityBundle\Build\UserBuilder();
    }

    /**
     * Gets the 'sulu_security.document.serializer.subscriber.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Serializer\Subscriber\SecuritySubscriber A Sulu\Bundle\SecurityBundle\Serializer\Subscriber\SecuritySubscriber instance.
     */
    protected function getSuluSecurity_Document_Serializer_Subscriber_SecurityService()
    {
        return $this->services['sulu_security.document.serializer.subscriber.security'] = new \Sulu\Bundle\SecurityBundle\Serializer\Subscriber\SecuritySubscriber($this->get('sulu_security.access_control_manager'), NULL);
    }

    /**
     * Gets the 'sulu_security.group_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Entity\GroupRepository A Sulu\Bundle\SecurityBundle\Entity\GroupRepository instance.
     */
    protected function getSuluSecurity_GroupRepositoryService()
    {
        return $this->services['sulu_security.group_repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('SuluSecurityBundle:Group');
    }

    /**
     * Gets the 'sulu_security.mask_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Security\Authorization\MaskConverter A Sulu\Component\Security\Authorization\MaskConverter instance.
     */
    protected function getSuluSecurity_MaskConverterService()
    {
        return $this->services['sulu_security.mask_converter'] = new \Sulu\Component\Security\Authorization\MaskConverter(array('view' => 64, 'add' => 32, 'edit' => 16, 'delete' => 8, 'archive' => 4, 'live' => 2, 'security' => 1));
    }

    /**
     * Gets the 'sulu_security.salt_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Security\Authentication\SaltGenerator A Sulu\Component\Security\Authentication\SaltGenerator instance.
     */
    protected function getSuluSecurity_SaltGeneratorService()
    {
        return $this->services['sulu_security.salt_generator'] = new \Sulu\Component\Security\Authentication\SaltGenerator();
    }

    /**
     * Gets the 'sulu_security.token_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Util\TokenGenerator A Sulu\Bundle\SecurityBundle\Util\TokenGenerator instance.
     */
    protected function getSuluSecurity_TokenGeneratorService()
    {
        return $this->services['sulu_security.token_generator'] = new \Sulu\Bundle\SecurityBundle\Util\TokenGenerator();
    }

    /**
     * Gets the 'sulu_security.twig_extension.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Twig\UserTwigExtension A Sulu\Bundle\SecurityBundle\Twig\UserTwigExtension instance.
     */
    protected function getSuluSecurity_TwigExtension_UserService()
    {
        return $this->services['sulu_security.twig_extension.user'] = new \Sulu\Bundle\SecurityBundle\Twig\UserTwigExtension($this->get('sulu_security.twig_extension.user.cache'), $this->get('sulu.repository.user'));
    }

    /**
     * Gets the 'sulu_security.twig_extension.user.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getSuluSecurity_TwigExtension_User_CacheService()
    {
        return $this->services['sulu_security.twig_extension.user.cache'] = new \Doctrine\Common\Cache\ArrayCache();
    }

    /**
     * Gets the 'sulu_security.user_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SecurityBundle\UserManager\UserManager A Sulu\Bundle\SecurityBundle\UserManager\UserManager instance.
     */
    protected function getSuluSecurity_UserManagerService()
    {
        return $this->services['sulu_security.user_manager'] = new \Sulu\Bundle\SecurityBundle\UserManager\UserManager($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'sulu_security.user_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SecurityBundle\User\UserProvider A Sulu\Bundle\SecurityBundle\User\UserProvider instance.
     */
    protected function getSuluSecurity_UserProviderService()
    {
        return $this->services['sulu_security.user_provider'] = new \Sulu\Bundle\SecurityBundle\User\UserProvider($this->get('sulu_security.user_repository'), $this->get('request_stack'), 'Sulu');
    }

    /**
     * Gets the 'sulu_security.user_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Security\Authentication\UserRepository A Sulu\Component\Security\Authentication\UserRepository instance.
     */
    protected function getSuluSecurity_UserRepositoryService()
    {
        return $this->services['sulu_security.user_repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('Sulu\\Bundle\\SecurityBundle\\Entity\\User');
    }

    /**
     * Gets the 'sulu_security.user_setting_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Security\Authentication\UserSettingRepository A Sulu\Component\Security\Authentication\UserSettingRepository instance.
     */
    protected function getSuluSecurity_UserSettingRepositoryService()
    {
        return $this->services['sulu_security.user_setting_repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('SuluSecurityBundle:UserSetting');
    }

    /**
     * Gets the 'sulu_snippet.content.snippet' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Content\SnippetContent A Sulu\Bundle\SnippetBundle\Content\SnippetContent instance.
     */
    protected function getSuluSnippet_Content_SnippetService()
    {
        return $this->services['sulu_snippet.content.snippet'] = new \Sulu\Bundle\SnippetBundle\Content\SnippetContent($this->get('sulu_snippet.default_snippet.manager'), $this->get('sulu_snippet.resolver'), false, 'SuluSnippetBundle:Template:content-types/snippet.html.twig');
    }

    /**
     * Gets the 'sulu_snippet.controller.snippet' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Controller\SnippetController A Sulu\Bundle\SnippetBundle\Controller\SnippetController instance.
     */
    protected function getSuluSnippet_Controller_SnippetService()
    {
        return $this->services['sulu_snippet.controller.snippet'] = new \Sulu\Bundle\SnippetBundle\Controller\SnippetController($this->get('fos_rest.view_handler'), $this->get('sulu.content.mapper'), $this->get('sulu.content.structure_manager'), $this->get('sulu_snippet.repository'), NULL, $this->get('cmf_routing.router'), $this->get('sulu_snippet.default_snippet.manager'), $this->get('sulu_document_manager.document_manager'), $this->get('form.factory'), $this->get('sulu_hash.request_hash_checker'));
    }

    /**
     * Gets the 'sulu_snippet.default_snippet.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Snippet\DefaultSnippetManager A Sulu\Bundle\SnippetBundle\Snippet\DefaultSnippetManager instance.
     */
    protected function getSuluSnippet_DefaultSnippet_ManagerService()
    {
        return $this->services['sulu_snippet.default_snippet.manager'] = new \Sulu\Bundle\SnippetBundle\Snippet\DefaultSnippetManager($this->get('sulu_core.webspace.settings_manager'), $this->get('sulu_document_manager.document_manager'), $this->get('sulu_core.webspace.webspace_manager'), $this->get('sulu_document_manager.document_registry'));
    }

    /**
     * Gets the 'sulu_snippet.document.snippet_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Document\SnippetInitializer A Sulu\Bundle\SnippetBundle\Document\SnippetInitializer instance.
     */
    protected function getSuluSnippet_Document_SnippetInitializerService()
    {
        return $this->services['sulu_snippet.document.snippet_initializer'] = new \Sulu\Bundle\SnippetBundle\Document\SnippetInitializer($this->get('sulu_document_manager.node_manager'), $this->get('sulu_document_manager.path_builder'));
    }

    /**
     * Gets the 'sulu_snippet.form.snippet' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Form\SnippetType A Sulu\Bundle\SnippetBundle\Form\SnippetType instance.
     */
    protected function getSuluSnippet_Form_SnippetService()
    {
        return $this->services['sulu_snippet.form.snippet'] = new \Sulu\Bundle\SnippetBundle\Form\SnippetType();
    }

    /**
     * Gets the 'sulu_snippet.jsconfig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\AdminBundle\Admin\JsConfig A Sulu\Bundle\AdminBundle\Admin\JsConfig instance.
     */
    protected function getSuluSnippet_JsconfigService()
    {
        return $this->services['sulu_snippet.jsconfig'] = new \Sulu\Bundle\AdminBundle\Admin\JsConfig('sulu-snippet', array('defaultType' => 'default'));
    }

    /**
     * Gets the 'sulu_snippet.repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Snippet\SnippetRepository A Sulu\Bundle\SnippetBundle\Snippet\SnippetRepository instance.
     */
    protected function getSuluSnippet_RepositoryService()
    {
        return $this->services['sulu_snippet.repository'] = new \Sulu\Bundle\SnippetBundle\Snippet\SnippetRepository($this->get('sulu.phpcr.session'), $this->get('sulu.content.mapper'), $this->get('sulu_document_manager.document_manager'));
    }

    /**
     * Gets the 'sulu_snippet.resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Snippet\SnippetResolver A Sulu\Bundle\SnippetBundle\Snippet\SnippetResolver instance.
     */
    protected function getSuluSnippet_ResolverService()
    {
        return $this->services['sulu_snippet.resolver'] = new \Sulu\Bundle\SnippetBundle\Snippet\SnippetResolver($this->get('sulu.content.mapper'), $this->get('sulu_website.resolver.structure'));
    }

    /**
     * Gets the 'sulu_snippet.twig.default_snippet' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Twig\DefaultSnippetTwigExtension A Sulu\Bundle\SnippetBundle\Twig\DefaultSnippetTwigExtension instance.
     */
    protected function getSuluSnippet_Twig_DefaultSnippetService()
    {
        return $this->services['sulu_snippet.twig.default_snippet'] = new \Sulu\Bundle\SnippetBundle\Twig\DefaultSnippetTwigExtension($this->get('sulu_snippet.default_snippet.manager'), $this->get('sulu_core.webspace.request_analyzer'), $this->get('sulu_snippet.resolver'));
    }

    /**
     * Gets the 'sulu_snippet.twig.snippet' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Twig\SnippetTwigExtension A Sulu\Bundle\SnippetBundle\Twig\SnippetTwigExtension instance.
     */
    protected function getSuluSnippet_Twig_SnippetService()
    {
        return $this->services['sulu_snippet.twig.snippet'] = new \Sulu\Bundle\SnippetBundle\Twig\SnippetTwigExtension($this->get('sulu.content.mapper'), $this->get('sulu_core.webspace.request_analyzer'), $this->get('sulu_website.resolver.structure'));
    }

    /**
     * Gets the 'sulu_snippet.twig.snippet.memoized' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Twig\MemoizedSnippetTwigExtension A Sulu\Bundle\SnippetBundle\Twig\MemoizedSnippetTwigExtension instance.
     */
    protected function getSuluSnippet_Twig_Snippet_MemoizedService()
    {
        return $this->services['sulu_snippet.twig.snippet.memoized'] = new \Sulu\Bundle\SnippetBundle\Twig\MemoizedSnippetTwigExtension($this->get('sulu_snippet.twig.snippet'), $this->get('sulu_core.cache.memoize'), 1);
    }

    /**
     * Gets the 'sulu_tag.content.type.tag_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\TagBundle\Content\Types\TagList A Sulu\Bundle\TagBundle\Content\Types\TagList instance.
     */
    protected function getSuluTag_Content_Type_TagListService()
    {
        return $this->services['sulu_tag.content.type.tag_list'] = new \Sulu\Bundle\TagBundle\Content\Types\TagList($this->get('sulu_tag.tag_manager'), 'SuluTagBundle:Template:content-types/tag_list.html.twig');
    }

    /**
     * Gets the 'sulu_tag.search.tags_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\TagBundle\Search\TagsConverter A Sulu\Bundle\TagBundle\Search\TagsConverter instance.
     */
    protected function getSuluTag_Search_TagsConverterService()
    {
        return $this->services['sulu_tag.search.tags_converter'] = new \Sulu\Bundle\TagBundle\Search\TagsConverter($this->get('sulu_tag.tag_manager'));
    }

    /**
     * Gets the 'sulu_tag.tag_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\TagBundle\Tag\TagManager A Sulu\Bundle\TagBundle\Tag\TagManager instance.
     */
    protected function getSuluTag_TagManagerService()
    {
        return $this->services['sulu_tag.tag_manager'] = new \Sulu\Bundle\TagBundle\Tag\TagManager($this->get('sulu_tag.tag_repository'), $this->get('sulu.repository.user'), $this->get('doctrine.orm.default_entity_manager'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'sulu_tag.tag_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\TagBundle\Entity\TagRepository A Sulu\Bundle\TagBundle\Entity\TagRepository instance.
     */
    protected function getSuluTag_TagRepositoryService()
    {
        return $this->services['sulu_tag.tag_repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('SuluTagBundle:Tag');
    }

    /**
     * Gets the 'sulu_tag.tag_request_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Tag\Request\TagRequestHandler A Sulu\Component\Tag\Request\TagRequestHandler instance.
     */
    protected function getSuluTag_TagRequestHandlerService()
    {
        return $this->services['sulu_tag.tag_request_handler'] = new \Sulu\Component\Tag\Request\TagRequestHandler($this->get('request_stack'));
    }

    /**
     * Gets the 'sulu_tag.twig_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\TagBundle\Twig\TagTwigExtension A Sulu\Bundle\TagBundle\Twig\TagTwigExtension instance.
     */
    protected function getSuluTag_TwigExtensionService()
    {
        return $this->services['sulu_tag.twig_extension'] = new \Sulu\Bundle\TagBundle\Twig\TagTwigExtension($this->get('sulu_tag.tag_manager'), $this->get('sulu_tag.tag_request_handler'), $this->get('jms_serializer'), $this->get('sulu_core.cache.memoize'));
    }

    /**
     * Gets the 'sulu_translate.export' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\TranslateBundle\Translate\Export A Sulu\Bundle\TranslateBundle\Translate\Export instance.
     */
    protected function getSuluTranslate_ExportService()
    {
        return $this->services['sulu_translate.export'] = new \Sulu\Bundle\TranslateBundle\Translate\Export($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'sulu_translate.import' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\TranslateBundle\Translate\Import A Sulu\Bundle\TranslateBundle\Translate\Import instance.
     */
    protected function getSuluTranslate_ImportService()
    {
        return $this->services['sulu_translate.import'] = new \Sulu\Bundle\TranslateBundle\Translate\Import($this->get('doctrine.orm.default_entity_manager'), $this->get('kernel'));
    }

    /**
     * Gets the 'sulu_website.analytics.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Analytics\AnalyticsManager A Sulu\Bundle\WebsiteBundle\Analytics\AnalyticsManager instance.
     */
    protected function getSuluWebsite_Analytics_ManagerService()
    {
        return $this->services['sulu_website.analytics.manager'] = new \Sulu\Bundle\WebsiteBundle\Analytics\AnalyticsManager($this->get('doctrine.orm.default_entity_manager'), $this->get('sulu_website.analytics.repository'), $this->get('sulu_website.domains.repository'));
    }

    /**
     * Gets the 'sulu_website.analytics.repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Entity\AnalyticsRepository A Sulu\Bundle\WebsiteBundle\Entity\AnalyticsRepository instance.
     */
    protected function getSuluWebsite_Analytics_RepositoryService()
    {
        return $this->services['sulu_website.analytics.repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('SuluWebsiteBundle:Analytics');
    }

    /**
     * Gets the 'sulu_website.analytics.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\EventListener\AppendAnalyticsListener A Sulu\Bundle\WebsiteBundle\EventListener\AppendAnalyticsListener instance.
     */
    protected function getSuluWebsite_Analytics_ResponseListenerService()
    {
        return $this->services['sulu_website.analytics.response_listener'] = new \Sulu\Bundle\WebsiteBundle\EventListener\AppendAnalyticsListener($this->get('sulu_website.templating.event_aware_engine'), $this->get('sulu_core.webspace.request_analyzer'), $this->get('sulu_website.analytics.repository'), 'dev');
    }

    /**
     * Gets the 'sulu_website.data_collector.sulu_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\DataCollector\SuluCollector A Sulu\Bundle\WebsiteBundle\DataCollector\SuluCollector instance.
     */
    protected function getSuluWebsite_DataCollector_SuluCollectorService()
    {
        return $this->services['sulu_website.data_collector.sulu_collector'] = new \Sulu\Bundle\WebsiteBundle\DataCollector\SuluCollector();
    }

    /**
     * Gets the 'sulu_website.default_locale.portal_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Locale\PortalDefaultLocaleProvider A Sulu\Bundle\WebsiteBundle\Locale\PortalDefaultLocaleProvider instance.
     */
    protected function getSuluWebsite_DefaultLocale_PortalProviderService()
    {
        return $this->services['sulu_website.default_locale.portal_provider'] = new \Sulu\Bundle\WebsiteBundle\Locale\PortalDefaultLocaleProvider($this->get('sulu_core.webspace.request_analyzer'));
    }

    /**
     * Gets the 'sulu_website.default_locale.request_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Locale\RequestDefaultLocaleProvider A Sulu\Bundle\WebsiteBundle\Locale\RequestDefaultLocaleProvider instance.
     */
    protected function getSuluWebsite_DefaultLocale_RequestProviderService()
    {
        return $this->services['sulu_website.default_locale.request_provider'] = new \Sulu\Bundle\WebsiteBundle\Locale\RequestDefaultLocaleProvider($this->get('sulu_core.webspace.request_analyzer'), $this->get('request_stack'));
    }

    /**
     * Gets the 'sulu_website.domains.repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Entity\DomainRepository A Sulu\Bundle\WebsiteBundle\Entity\DomainRepository instance.
     */
    protected function getSuluWebsite_Domains_RepositoryService()
    {
        return $this->services['sulu_website.domains.repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('SuluWebsiteBundle:Domain');
    }

    /**
     * Gets the 'sulu_website.event_listener.set_theme' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\EventListener\SetThemeEventListener A Sulu\Bundle\WebsiteBundle\EventListener\SetThemeEventListener instance.
     */
    protected function getSuluWebsite_EventListener_SetThemeService()
    {
        return $this->services['sulu_website.event_listener.set_theme'] = new \Sulu\Bundle\WebsiteBundle\EventListener\SetThemeEventListener($this->get('sulu_core.webspace.request_analyzer'), $this->get('liip_theme.active_theme'));
    }

    /**
     * Gets the 'sulu_website.event_subscriber.generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\EventSubscriber\GeneratorEventSubscriber A Sulu\Bundle\WebsiteBundle\EventSubscriber\GeneratorEventSubscriber instance.
     */
    protected function getSuluWebsite_EventSubscriber_GeneratorService()
    {
        return $this->services['sulu_website.event_subscriber.generator'] = new \Sulu\Bundle\WebsiteBundle\EventSubscriber\GeneratorEventSubscriber('1.2.3');
    }

    /**
     * Gets the 'sulu_website.exception.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Controller\ExceptionController A Sulu\Bundle\WebsiteBundle\Controller\ExceptionController instance.
     */
    protected function getSuluWebsite_Exception_ControllerService()
    {
        return $this->services['sulu_website.exception.controller'] = new \Sulu\Bundle\WebsiteBundle\Controller\ExceptionController($this->get('twig'), true, $this->get('sulu_website.resolver.parameter'), $this->get('sulu.content.mapper'), $this->get('sulu_core.webspace.request_analyzer', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sulu_website.http_cache.clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Cache\CacheClearer A Sulu\Bundle\WebsiteBundle\Cache\CacheClearer instance.
     */
    protected function getSuluWebsite_HttpCache_ClearerService()
    {
        return $this->services['sulu_website.http_cache.clearer'] = new \Sulu\Bundle\WebsiteBundle\Cache\CacheClearer($this->targetDirs[3], 'dev', $this->get('filesystem'));
    }

    /**
     * Gets the 'sulu_website.navigation_mapper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Navigation\NavigationMapper A Sulu\Bundle\WebsiteBundle\Navigation\NavigationMapper instance.
     */
    protected function getSuluWebsite_NavigationMapperService()
    {
        return $this->services['sulu_website.navigation_mapper'] = new \Sulu\Bundle\WebsiteBundle\Navigation\NavigationMapper($this->get('sulu.content.mapper'), $this->get('sulu.content.query_executor'), new \Sulu\Bundle\WebsiteBundle\Navigation\NavigationQueryBuilder($this->get('sulu.content.structure_manager'), $this->get('sulu_content.extension.manager'), 'i18n'), $this->get('sulu.phpcr.session'), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sulu_website.provider.content' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Routing\ContentRouteProvider A Sulu\Bundle\WebsiteBundle\Routing\ContentRouteProvider instance.
     */
    protected function getSuluWebsite_Provider_ContentService()
    {
        return $this->services['sulu_website.provider.content'] = new \Sulu\Bundle\WebsiteBundle\Routing\ContentRouteProvider($this->get('sulu.content.mapper'), $this->get('sulu_core.webspace.request_analyzer'), $this->get('sulu_website.default_locale.portal_provider'), $this->get('sulu_core.webspace.webspace_manager.url_replacer'));
    }

    /**
     * Gets the 'sulu_website.resolver.parameter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Resolver\ParameterResolver A Sulu\Bundle\WebsiteBundle\Resolver\ParameterResolver instance.
     */
    protected function getSuluWebsite_Resolver_ParameterService()
    {
        return $this->services['sulu_website.resolver.parameter'] = new \Sulu\Bundle\WebsiteBundle\Resolver\ParameterResolver($this->get('sulu_website.resolver.structure'), $this->get('sulu_website.resolver.request_analyzer'));
    }

    /**
     * Gets the 'sulu_website.resolver.request_analyzer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Resolver\RequestAnalyzerResolver A Sulu\Bundle\WebsiteBundle\Resolver\RequestAnalyzerResolver instance.
     */
    protected function getSuluWebsite_Resolver_RequestAnalyzerService()
    {
        return $this->services['sulu_website.resolver.request_analyzer'] = new \Sulu\Bundle\WebsiteBundle\Resolver\RequestAnalyzerResolver($this->get('sulu_core.webspace.webspace_manager'), $this->get('request_stack'), 'dev', array('analyticsKey' => 'UA-SULU-PREVIEW-KEY'));
    }

    /**
     * Gets the 'sulu_website.resolver.structure' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Resolver\StructureResolver A Sulu\Bundle\WebsiteBundle\Resolver\StructureResolver instance.
     */
    protected function getSuluWebsite_Resolver_StructureService()
    {
        return $this->services['sulu_website.resolver.structure'] = new \Sulu\Bundle\WebsiteBundle\Resolver\StructureResolver($this->get('sulu.content.type_manager'), $this->get('sulu_content.extension.manager'));
    }

    /**
     * Gets the 'sulu_website.router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\EventListener\RouterListener A Sulu\Bundle\WebsiteBundle\EventListener\RouterListener instance.
     */
    protected function getSuluWebsite_RouterListenerService()
    {
        return $this->services['sulu_website.router_listener'] = new \Sulu\Bundle\WebsiteBundle\EventListener\RouterListener(new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('cmf_routing.router'), $this->get('request_stack'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('sulu_core.webspace.request_analyzer'));
    }

    /**
     * Gets the 'sulu_website.routing.portal_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Routing\PortalLoader A Sulu\Bundle\WebsiteBundle\Routing\PortalLoader instance.
     */
    protected function getSuluWebsite_Routing_PortalLoaderService()
    {
        return $this->services['sulu_website.routing.portal_loader'] = new \Sulu\Bundle\WebsiteBundle\Routing\PortalLoader();
    }

    /**
     * Gets the 'sulu_website.sitemap' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Sitemap\SitemapGenerator A Sulu\Bundle\WebsiteBundle\Sitemap\SitemapGenerator instance.
     */
    protected function getSuluWebsite_SitemapService()
    {
        return $this->services['sulu_website.sitemap'] = new \Sulu\Bundle\WebsiteBundle\Sitemap\SitemapGenerator($this->get('sulu.content.query_executor'), $this->get('sulu_core.webspace.webspace_manager'), new \Sulu\Bundle\WebsiteBundle\Sitemap\SitemapContentQueryBuilder($this->get('sulu.content.structure_manager'), $this->get('sulu_content.extension.manager'), 'i18n'), 'dev');
    }

    /**
     * Gets the 'sulu_website.sitemap_xml_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Sitemap\SitemapXMLGenerator A Sulu\Bundle\WebsiteBundle\Sitemap\SitemapXMLGenerator instance.
     */
    protected function getSuluWebsite_SitemapXmlGeneratorService()
    {
        return $this->services['sulu_website.sitemap_xml_generator'] = new \Sulu\Bundle\WebsiteBundle\Sitemap\SitemapXMLGenerator($this->get('twig'));
    }

    /**
     * Gets the 'sulu_website.templating.event_aware_engine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Templating\EventAwareEngine A Sulu\Bundle\WebsiteBundle\Templating\EventAwareEngine instance.
     */
    protected function getSuluWebsite_Templating_EventAwareEngineService()
    {
        return $this->services['sulu_website.templating.event_aware_engine'] = new \Sulu\Bundle\WebsiteBundle\Templating\EventAwareEngine(new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator')), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'sulu_website.translator.request_analyzer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Translator\RequestAnalyzerTranslator A Sulu\Bundle\WebsiteBundle\Translator\RequestAnalyzerTranslator instance.
     */
    protected function getSuluWebsite_Translator_RequestAnalyzerService()
    {
        return $this->services['sulu_website.translator.request_analyzer'] = new \Sulu\Bundle\WebsiteBundle\Translator\RequestAnalyzerTranslator($this->get('translator.data_collector'), $this->get('sulu_core.webspace.request_analyzer'));
    }

    /**
     * Gets the 'sulu_website.twig.content' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Twig\Content\ContentTwigExtension A Sulu\Bundle\WebsiteBundle\Twig\Content\ContentTwigExtension instance.
     */
    protected function getSuluWebsite_Twig_ContentService()
    {
        return $this->services['sulu_website.twig.content'] = new \Sulu\Bundle\WebsiteBundle\Twig\Content\ContentTwigExtension($this->get('sulu.content.mapper'), $this->get('sulu_website.resolver.structure'), $this->get('sulu.phpcr.session'), $this->get('sulu_core.webspace.request_analyzer'));
    }

    /**
     * Gets the 'sulu_website.twig.content.memoized' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Twig\Content\MemoizedContentTwigExtension A Sulu\Bundle\WebsiteBundle\Twig\Content\MemoizedContentTwigExtension instance.
     */
    protected function getSuluWebsite_Twig_Content_MemoizedService()
    {
        return $this->services['sulu_website.twig.content.memoized'] = new \Sulu\Bundle\WebsiteBundle\Twig\Content\MemoizedContentTwigExtension($this->get('sulu_website.twig.content'), $this->get('sulu_core.cache.memoize'), 1);
    }

    /**
     * Gets the 'sulu_website.twig.content_path' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension A Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension instance.
     */
    protected function getSuluWebsite_Twig_ContentPathService()
    {
        return $this->services['sulu_website.twig.content_path'] = new \Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension($this->get('sulu_core.webspace.webspace_manager'), 'dev', $this->get('sulu_core.webspace.request_analyzer', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sulu_website.twig.meta' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Twig\Meta\MetaTwigExtension A Sulu\Bundle\WebsiteBundle\Twig\Meta\MetaTwigExtension instance.
     */
    protected function getSuluWebsite_Twig_MetaService()
    {
        return $this->services['sulu_website.twig.meta'] = new \Sulu\Bundle\WebsiteBundle\Twig\Meta\MetaTwigExtension($this->get('sulu_core.webspace.request_analyzer'), $this->get('sulu_website.twig.content_path'));
    }

    /**
     * Gets the 'sulu_website.twig.navigation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Twig\Navigation\NavigationTwigExtension A Sulu\Bundle\WebsiteBundle\Twig\Navigation\NavigationTwigExtension instance.
     */
    protected function getSuluWebsite_Twig_NavigationService()
    {
        return $this->services['sulu_website.twig.navigation'] = new \Sulu\Bundle\WebsiteBundle\Twig\Navigation\NavigationTwigExtension($this->get('sulu.content.mapper'), $this->get('sulu_website.navigation_mapper'), $this->get('sulu_core.webspace.request_analyzer', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sulu_website.twig.navigation.memoized' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Twig\Navigation\MemoizedNavigationTwigExtension A Sulu\Bundle\WebsiteBundle\Twig\Navigation\MemoizedNavigationTwigExtension instance.
     */
    protected function getSuluWebsite_Twig_Navigation_MemoizedService()
    {
        return $this->services['sulu_website.twig.navigation.memoized'] = new \Sulu\Bundle\WebsiteBundle\Twig\Navigation\MemoizedNavigationTwigExtension($this->get('sulu_website.twig.navigation'), $this->get('sulu_core.cache.memoize'), 1);
    }

    /**
     * Gets the 'sulu_website.twig.seo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Twig\Seo\SeoTwigExtension A Sulu\Bundle\WebsiteBundle\Twig\Seo\SeoTwigExtension instance.
     */
    protected function getSuluWebsite_Twig_SeoService()
    {
        return $this->services['sulu_website.twig.seo'] = new \Sulu\Bundle\WebsiteBundle\Twig\Seo\SeoTwigExtension($this->get('sulu_core.webspace.request_analyzer'), $this->get('sulu_website.twig.content_path'), $this->get('request_stack'));
    }

    /**
     * Gets the 'sulu_website.twig.sitemap' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Twig\Sitemap\SitemapTwigExtension A Sulu\Bundle\WebsiteBundle\Twig\Sitemap\SitemapTwigExtension instance.
     */
    protected function getSuluWebsite_Twig_SitemapService()
    {
        return $this->services['sulu_website.twig.sitemap'] = new \Sulu\Bundle\WebsiteBundle\Twig\Sitemap\SitemapTwigExtension($this->get('sulu_website.sitemap'), $this->get('sulu_core.webspace.webspace_manager'), 'dev', $this->get('sulu_core.webspace.request_analyzer', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sulu_website.twig.sitemap.memoized' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Twig\Sitemap\MemoizedSitemapTwigExtension A Sulu\Bundle\WebsiteBundle\Twig\Sitemap\MemoizedSitemapTwigExtension instance.
     */
    protected function getSuluWebsite_Twig_Sitemap_MemoizedService()
    {
        return $this->services['sulu_website.twig.sitemap.memoized'] = new \Sulu\Bundle\WebsiteBundle\Twig\Sitemap\MemoizedSitemapTwigExtension($this->get('sulu_website.twig.sitemap'), $this->get('sulu_core.cache.memoize'), 1);
    }

    /**
     * Gets the 'sulu_website.twig.util' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Twig\Core\UtilTwigExtension A Sulu\Bundle\WebsiteBundle\Twig\Core\UtilTwigExtension instance.
     */
    protected function getSuluWebsite_Twig_UtilService()
    {
        return $this->services['sulu_website.twig.util'] = new \Sulu\Bundle\WebsiteBundle\Twig\Core\UtilTwigExtension();
    }

    /**
     * Gets the 'sulu_websocket.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsocketBundle\Admin\WebsocketAdmin A Sulu\Bundle\WebsocketBundle\Admin\WebsocketAdmin instance.
     */
    protected function getSuluWebsocket_AdminService()
    {
        return $this->services['sulu_websocket.admin'] = new \Sulu\Bundle\WebsocketBundle\Admin\WebsocketAdmin();
    }

    /**
     * Gets the 'sulu_websocket.admin.message_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Websocket\MessageDispatcher\MessageBuilder A Sulu\Component\Websocket\MessageDispatcher\MessageBuilder instance.
     */
    protected function getSuluWebsocket_Admin_MessageBuilderService()
    {
        return $this->services['sulu_websocket.admin.message_builder'] = new \Sulu\Component\Websocket\MessageDispatcher\MessageBuilder();
    }

    /**
     * Gets the 'sulu_websocket.fallback_controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Bundle\WebsocketBundle\Controller\FallbackController A Sulu\Bundle\WebsocketBundle\Controller\FallbackController instance.
     */
    protected function getSuluWebsocket_FallbackControllerService()
    {
        return $this->services['sulu_websocket.fallback_controller'] = new \Sulu\Bundle\WebsocketBundle\Controller\FallbackController($this->get('sulu_websocket.manager'));
    }

    /**
     * Gets the 'sulu_websocket.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sulu\Component\Websocket\RatchetAppManager A Sulu\Component\Websocket\RatchetAppManager instance.
     */
    protected function getSuluWebsocket_ManagerService()
    {
        return $this->services['sulu_websocket.manager'] = new \Sulu\Component\Websocket\RatchetAppManager(9876, 'sulu.lo', '0.0.0.0');
    }

    /**
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance.
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Mailer A Swift_Mailer instance.
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /**
     * Gets the 'swiftmailer.mailer.default.plugin.messagelogger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Plugins_MessageLogger A Swift_Plugins_MessageLogger instance.
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.spool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_MemorySpool A Swift_MemorySpool instance.
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_SpoolTransport A Swift_Transport_SpoolTransport instance.
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool'));

        $instance->registerPlugin($this->get('swiftmailer.mailer.default.plugin.messagelogger'));

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance.
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);

        return $instance;
    }

    /**
     * Gets the 'templating.cache_warmer.template_paths' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ThemeBundle\CacheWarmer\TemplatePathsCacheWarmer A Liip\ThemeBundle\CacheWarmer\TemplatePathsCacheWarmer instance.
     */
    protected function getTemplating_CacheWarmer_TemplatePathsService()
    {
        return $this->services['templating.cache_warmer.template_paths'] = new \Liip\ThemeBundle\CacheWarmer\TemplatePathsCacheWarmer($this->get('templating.finder'), $this->get('templating.locator'), $this->get('liip_theme.active_theme'));
    }

    /**
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance.
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the 'templating.helper.assets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper instance.
     */
    protected function getTemplating_Helper_AssetsService()
    {
        return $this->services['templating.helper.assets'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper($this->get('assets.packages'), array());
    }

    /**
     * Gets the 'templating.helper.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper instance.
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('cmf_routing.router'));
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance.
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ThemeBundle\Locator\TemplateLocator A Liip\ThemeBundle\Locator\TemplateLocator instance.
     */
    protected function getTemplating_LocatorService()
    {
        $a = $this->get('liip_theme.active_theme');

        return $this->services['templating.locator'] = new \Liip\ThemeBundle\Locator\TemplateLocator(new \Liip\ThemeBundle\Locator\FileLocator($this->get('kernel'), $a, ($this->targetDirs[3].'/Resources'), array(), array('app_resource' => array(), 'bundle_resource' => array(), 'bundle_resource_dir' => array())), __DIR__, $a);
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance.
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance.
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance.
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the 'translation.dumper.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper A Symfony\Component\Translation\Dumper\JsonFileDumper instance.
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance.
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance.
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance.
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance.
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance.
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance.
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance.
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance.
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /**
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance.
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance.
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /**
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance.
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance.
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance.
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the 'translation.loader.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader A Symfony\Component\Translation\Loader\JsonFileLoader instance.
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance.
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance.
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance.
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance.
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance.
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance.
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance.
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance.
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /**
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance.
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => true, 'resource_files' => array('ja' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ja.xlf')), 'pt_BR' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pt_BR.xlf')), 'hr' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.hr.xlf')), 'et' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf')), 'hy' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf')), 'az' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.az.xlf')), 'mn' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf')), 'zh_CN' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.zh_CN.xlf')), 'tr' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.tr.xlf')), 'en' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[4].'/vendor/symfony-cmf/core-bundle/Resources/translations/CmfCoreBundle.en.xliff'), 4 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/SearchBundle/Resources/translations/sulu/backend.en.xlf'), 5 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/Resources/translations/sulu/backend.en.xlf'), 6 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Resources/translations/sulu/backend.en.xlf'), 7 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/Resources/translations/sulu/backend.en.xlf'), 8 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/Resources/translations/sulu/backend.en.xlf'), 9 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/SnippetBundle/Resources/translations/sulu/backend.en.xlf'), 10 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/ContentBundle/Resources/translations/sulu/backend.en.xlf'), 11 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/TagBundle/Resources/translations/sulu/backend.en.xlf'), 12 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Resources/translations/sulu/backend.en.xlf'), 13 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/LocationBundle/Resources/translations/sulu/backend.en.xlf'), 14 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/CustomUrlBundle/Resources/translations/sulu/backend.en.xlf'), 15 => ($this->targetDirs[4].'/vendor/symfony-cmf/routing-bundle/Symfony/Cmf/Bundle/RoutingBundle/Resources/translations/CmfRoutingBundle.en.xliff')), 'fr' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[4].'/vendor/symfony-cmf/core-bundle/Resources/translations/CmfCoreBundle.fr.xliff'), 4 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/SearchBundle/Resources/translations/sulu/backend.fr.xlf'), 5 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/Resources/translations/sulu/backend.fr.xlf'), 6 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Resources/translations/sulu/backend.fr.xlf'), 7 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/Resources/translations/sulu/backend.fr.xlf'), 8 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/Resources/translations/sulu/backend.fr.xlf'), 9 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/SnippetBundle/Resources/translations/sulu/backend.fr.xlf'), 10 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/ContentBundle/Resources/translations/sulu/backend.fr.xlf'), 11 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/TagBundle/Resources/translations/sulu/backend.fr.xlf'), 12 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Resources/translations/sulu/backend.fr.xlf'), 13 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/LocationBundle/Resources/translations/sulu/backend.fr.xlf'), 14 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/CustomUrlBundle/Resources/translations/sulu/backend.fr.xlf'), 15 => ($this->targetDirs[4].'/vendor/symfony-cmf/routing-bundle/Symfony/Cmf/Bundle/RoutingBundle/Resources/translations/CmfRoutingBundle.fr.xliff')), 'hu' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.hu.xlf')), 'da' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.da.xlf')), 'sl' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[4].'/vendor/symfony-cmf/core-bundle/Resources/translations/CmfCoreBundle.sl.xliff')), 'sr_Cyrl' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sr_Cyrl.xlf')), 'nl' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[4].'/vendor/symfony-cmf/routing-bundle/Symfony/Cmf/Bundle/RoutingBundle/Resources/translations/CmfRoutingBundle.nl.xliff')), 'zh_TW' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf')), 'ar' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ar.xlf')), 'sq' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf')), 'af' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf')), 'fi' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf')), 'ru' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ru.xlf')), 'bg' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.bg.xlf')), 'gl' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.gl.xlf')), 'pl' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[4].'/vendor/symfony-cmf/routing-bundle/Symfony/Cmf/Bundle/RoutingBundle/Resources/translations/CmfRoutingBundle.pl.xliff')), 'it' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.it.xlf')), 'lb' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.lb.xlf')), 'he' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.he.xlf')), 'sv' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sv.xlf')), 'lt' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.lt.xlf')), 'ro' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ro.xlf')), 'nn' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf')), 'no' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.no.xlf')), 'cy' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')), 'pt' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf')), 'sk' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sk.xlf'), 3 => ($this->targetDirs[4].'/vendor/symfony-cmf/core-bundle/Resources/translations/CmfCoreBundle.sk.xliff')), 'el' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.el.xlf')), 'sr_Latn' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sr_Latn.xlf')), 'id' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.id.xlf')), 'eu' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf')), 'vi' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.vi.xlf')), 'th' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.th.xlf')), 'fa' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.fa.xlf')), 'cs' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[4].'/vendor/symfony-cmf/core-bundle/Resources/translations/CmfCoreBundle.cs.xliff')), 'de' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[4].'/vendor/symfony-cmf/core-bundle/Resources/translations/CmfCoreBundle.de.xliff'), 4 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/SearchBundle/Resources/translations/sulu/backend.de.xlf'), 5 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/Resources/translations/sulu/backend.de.xlf'), 6 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Resources/translations/sulu/backend.de.xlf'), 7 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/Resources/translations/sulu/backend.de.xlf'), 8 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/Resources/translations/sulu/backend.de.xlf'), 9 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/SnippetBundle/Resources/translations/sulu/backend.de.xlf'), 10 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/ContentBundle/Resources/translations/sulu/backend.de.xlf'), 11 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/TagBundle/Resources/translations/sulu/backend.de.xlf'), 12 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Resources/translations/sulu/backend.de.xlf'), 13 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/LocationBundle/Resources/translations/sulu/backend.de.xlf'), 14 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/CustomUrlBundle/Resources/translations/sulu/backend.de.xlf'), 15 => ($this->targetDirs[4].'/vendor/symfony-cmf/routing-bundle/Symfony/Cmf/Bundle/RoutingBundle/Resources/translations/CmfRoutingBundle.de.xliff')), 'ca' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ca.xlf')), 'es' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[4].'/vendor/symfony-cmf/core-bundle/Resources/translations/CmfCoreBundle.es.xliff')), 'uk' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf')), 'lv' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf')), 'ua' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ua.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pt_PT.xlf')))), array());

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));
        $instance->setFallbackLocales(array(0 => 'en'));

        return $instance;
    }

    /**
     * Gets the 'translator_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener A Symfony\Component\HttpKernel\EventListener\TranslatorListener instance.
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('sulu_website.translator.request_analyzer'), $this->get('request_stack'));
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Environment A Twig_Environment instance.
     */
    protected function getTwigService()
    {
        $a = $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('request_stack');
        $c = $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('fragment.handler');

        $e = new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($b, $c);

        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('dev');
        $f->setDebug(true);
        if ($this->has('request_stack')) {
            $f->setRequestStack($b);
        }
        $f->setContainer($this);

        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('exception_controller' => 'sulu_website.exception.controller:showAction', 'debug' => true, 'strict_variables' => true, 'form_themes' => array(0 => 'form_div_layout.html.twig'), 'autoescape' => 'filename', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension($this->get('twig.profile'), $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('sulu_website.translator.request_analyzer')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($this->get('assets.packages'), $e));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($d));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, $this->targetDirs[3], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('cmf_routing.router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($d));
        $instance->addExtension($e);
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig', 1 => 'CmfCoreBundle:Form:checkbox_url_label_form_type.html.twig')), $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Twig_Extension_Debug());
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), true, array(), array(0 => 'ClientWebsiteBundle'), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension($this->get('cmf_core.twig.children_extension'));
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerExtension($this->get('jms_serializer')));
        $instance->addExtension($this->get('sulu_contact.twig'));
        $instance->addExtension($this->get('sulu_media.twig_extension.disposition_type'));
        $instance->addExtension($this->get('sulu_media.twig_extension.media'));
        $instance->addExtension($this->get('sulu_security.twig_extension.user'));
        $instance->addExtension($this->get('sulu_category.twig_extension'));
        $instance->addExtension($this->get('sulu_snippet.twig.snippet.memoized'));
        $instance->addExtension($this->get('sulu_snippet.twig.default_snippet'));
        $instance->addExtension($this->get('sulu_content.twig_extension'));
        $instance->addExtension($this->get('sulu_tag.twig_extension'));
        $instance->addExtension($this->get('sulu_website.twig.content_path'));
        $instance->addExtension($this->get('sulu_website.twig.navigation.memoized'));
        $instance->addExtension($this->get('sulu_website.twig.sitemap.memoized'));
        $instance->addExtension($this->get('sulu_website.twig.content.memoized'));
        $instance->addExtension($this->get('sulu_website.twig.meta'));
        $instance->addExtension($this->get('sulu_website.twig.seo'));
        $instance->addExtension($this->get('sulu_website.twig.util'));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension($this->get('var_dumper.cloner')));
        $instance->addGlobal('app', $f);
        call_user_func(array(new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','), 'configure'), $instance);

        return $instance;
    }

    /**
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController A Symfony\Bundle\TwigBundle\Controller\ExceptionController instance.
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the 'twig.controller.preview_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController A Symfony\Bundle\TwigBundle\Controller\PreviewErrorController instance.
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'sulu_website.exception.controller:showAction');
    }

    /**
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance.
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('sulu_website.exception.controller:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ThemeBundle\Twig\Loader\FilesystemLoader A Liip\ThemeBundle\Twig\Loader\FilesystemLoader instance.
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Liip\ThemeBundle\Twig\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'), $this->get('liip_theme.active_theme'));

        $instance->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[4].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[4].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[4].'/vendor/symfony-cmf/core-bundle/Resources/views'), 'CmfCore');
        $instance->addPath(($this->targetDirs[4].'/vendor/doctrine/phpcr-bundle/Resources/views'), 'DoctrinePHPCR');
        $instance->addPath(($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/Resources/views'), 'SuluContact');
        $instance->addPath(($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Resources/views'), 'SuluMedia');
        $instance->addPath(($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/Resources/views'), 'SuluSecurity');
        $instance->addPath(($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/Resources/views'), 'SuluCategory');
        $instance->addPath(($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/SnippetBundle/Resources/views'), 'SuluSnippet');
        $instance->addPath(($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/ContentBundle/Resources/views'), 'SuluContent');
        $instance->addPath(($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/TagBundle/Resources/views'), 'SuluTag');
        $instance->addPath(($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Resources/views'), 'SuluWebsite');
        $instance->addPath(($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/LocationBundle/Resources/views'), 'SuluLocation');
        $instance->addPath(($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/TranslateBundle/Resources/views'), 'SuluTranslate');
        $instance->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/TestBundle/Resources/views'), 'SuluTest');
        $instance->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the 'twig.profile' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Profiler_Profile A Twig_Profiler_Profile instance.
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig_Profiler_Profile();
    }

    /**
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance.
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance.
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface A Symfony\Component\Validator\Validator\ValidatorInterface instance.
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }

    /**
     * Gets the 'validator.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface A Symfony\Component\Validator\ValidatorBuilderInterface instance.
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => 'doctrine.orm.validator.unique', 'doctrine_phpcr.odm.validator.valid_phpcr_odm' => 'doctrine_phpcr.odm.validator.valid_phpcr_odm', 'Doctrine\\Bundle\\PHPCRBundle\\Validator\\Constraints\\ValidPhpcrOdmValidator' => 'doctrine_phpcr.odm.validator.valid_phpcr_odm')));
        $instance->setTranslator($this->get('sulu_website.translator.request_analyzer'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml'), 1 => ($this->targetDirs[4].'/vendor/symfony-cmf/routing-bundle/Symfony/Cmf/Bundle/RoutingBundle/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer')));

        return $instance;
    }

    /**
     * Gets the 'validator.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator A Symfony\Component\Validator\Constraints\EmailValidator instance.
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /**
     * Gets the 'validator.expression' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator A Symfony\Component\Validator\Constraints\ExpressionValidator instance.
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator($this->get('property_accessor'));
    }

    /**
     * Gets the 'var_dumper.cli_dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper A Symfony\Component\VarDumper\Dumper\CliDumper instance.
     */
    protected function getVarDumper_CliDumperService()
    {
        return $this->services['var_dumper.cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8');
    }

    /**
     * Gets the 'var_dumper.cloner' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner A Symfony\Component\VarDumper\Cloner\VarCloner instance.
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the 'web_profiler.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController A Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController instance.
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), true);
    }

    /**
     * Gets the 'web_profiler.controller.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController A Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController instance.
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController($this->get('cmf_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), array('data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.ajax' => array(0 => 'ajax', 1 => '@WebProfiler/Collector/ajax.html.twig'), 'data_collector.form' => array(0 => 'form', 1 => '@WebProfiler/Collector/form.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.translation' => array(0 => 'translation', 1 => '@WebProfiler/Collector/translation.html.twig'), 'data_collector.twig' => array(0 => 'twig', 1 => '@WebProfiler/Collector/twig.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => '@Doctrine/Collector/db.html.twig'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig'), 'data_collector.dump' => array(0 => 'dump', 1 => '@Debug/Profiler/dump.html.twig'), 'doctrine_phpcr.data_collector' => array(0 => 'phpcr', 1 => 'DoctrinePHPCRBundle:Collector:phpcr'), 'sulu_website.data_collector.sulu_collector' => array(0 => 'sulu', 1 => 'SuluWebsiteBundle:Profiler:layout'), 'data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig')), 'bottom');
    }

    /**
     * Gets the 'web_profiler.controller.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController A Symfony\Bundle\WebProfilerBundle\Controller\RouterController instance.
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), $this->get('cmf_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'web_profiler.debug_toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener A Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener instance.
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener($this->get('twig'), false, 2, 'bottom', $this->get('cmf_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), '^/(app(_[\\w]+)?\\.php/)?_wdt');
    }

    /**
     * Updates the 'request' service.
     */
    protected function synchronizeRequestService()
    {
        if ($this->initialized('cmf_routing.dynamic_router')) {
            $this->get('cmf_routing.dynamic_router')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
    }

    /**
     * Gets the 'assetic.asset_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\AsseticBundle\Factory\AssetFactory A Symfony\Bundle\AsseticBundle\Factory\AssetFactory instance.
     */
    protected function getAssetic_AssetFactoryService()
    {
        $this->services['assetic.asset_factory'] = $instance = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), ($this->targetDirs[3].'/../web'), true);

        $instance->addWorker(new \Symfony\Bundle\AsseticBundle\Factory\Worker\UseControllerWorker());

        return $instance;
    }

    /**
     * Gets the 'cmf_routing.matcher.dummy_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Routing\RouteCollection A Symfony\Component\Routing\RouteCollection instance.
     */
    protected function getCmfRouting_Matcher_DummyCollectionService()
    {
        return $this->services['cmf_routing.matcher.dummy_collection'] = new \Symfony\Component\Routing\RouteCollection();
    }

    /**
     * Gets the 'cmf_routing.matcher.dummy_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance.
     */
    protected function getCmfRouting_Matcher_DummyContextService()
    {
        return $this->services['cmf_routing.matcher.dummy_context'] = new \Symfony\Component\Routing\RequestContext();
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance.
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver A Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver instance.
     */
    protected function getControllerResolverService()
    {
        return $this->services['controller_resolver'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'doctrine.dbal.logger.profiling.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack A Doctrine\DBAL\Logging\DebugStack instance.
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the 'hateoas.configuration.relations_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Hateoas\Configuration\RelationsRepository A Hateoas\Configuration\RelationsRepository instance.
     */
    protected function getHateoas_Configuration_RelationsRepositoryService()
    {
        $a = $this->get('jms_serializer.metadata.file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Hateoas\Configuration\Metadata\Driver\YamlDriver($a);

        $d = new \Hateoas\Configuration\Metadata\Driver\XmlDriver($a);

        $e = new \Hateoas\Configuration\Metadata\Driver\AnnotationDriver($b);

        $f = new \Metadata\Driver\DriverChain(array(0 => $c, 1 => $d, 2 => $e));

        $g = new \Metadata\Cache\FileCache((__DIR__.'/hateoas'));

        $h = new \Metadata\MetadataFactory($f, 'Metadata\\ClassHierarchyMetadata', true);
        $h->setCache($g);

        return $this->services['hateoas.configuration.relations_repository'] = new \Hateoas\Configuration\RelationsRepository($h, new \Hateoas\Configuration\Provider\RelationProvider($h, $this->get('hateoas.configuration.provider.resolver')));
    }

    /**
     * Gets the 'hateoas.embeds_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Hateoas\Factory\EmbeddedsFactory A Hateoas\Factory\EmbeddedsFactory instance.
     */
    protected function getHateoas_EmbedsFactoryService()
    {
        return $this->services['hateoas.embeds_factory'] = new \Hateoas\Factory\EmbeddedsFactory($this->get('hateoas.configuration.relations_repository'), $this->get('hateoas.expression.evaluator'), $this->get('hateoas.serializer.exclusion_manager'));
    }

    /**
     * Gets the 'hateoas.links_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Hateoas\Factory\LinksFactory A Hateoas\Factory\LinksFactory instance.
     */
    protected function getHateoas_LinksFactoryService()
    {
        return $this->services['hateoas.links_factory'] = new \Hateoas\Factory\LinksFactory($this->get('hateoas.configuration.relations_repository'), new \Hateoas\Factory\LinkFactory($this->get('hateoas.expression.evaluator'), $this->get('hateoas.generator.registry')), $this->get('hateoas.serializer.exclusion_manager'));
    }

    /**
     * Gets the 'jms_serializer.metadata.file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Metadata\Driver\FileLocator A Metadata\Driver\FileLocator instance.
     */
    protected function getJmsSerializer_Metadata_FileLocatorService()
    {
        return $this->services['jms_serializer.metadata.file_locator'] = new \Metadata\Driver\FileLocator(array('Symfony\\Bundle\\FrameworkBundle' => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/config/serializer'), 'Symfony\\Bundle\\TwigBundle' => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/config/serializer'), 'Symfony\\Bundle\\MonologBundle' => ($this->targetDirs[4].'/vendor/symfony/monolog-bundle/Resources/config/serializer'), 'Symfony\\Bundle\\SwiftmailerBundle' => ($this->targetDirs[4].'/vendor/symfony/swiftmailer-bundle/Resources/config/serializer'), 'Symfony\\Bundle\\AsseticBundle' => ($this->targetDirs[4].'/vendor/symfony/assetic-bundle/Resources/config/serializer'), 'Sensio\\Bundle\\FrameworkExtraBundle' => ($this->targetDirs[4].'/vendor/sensio/framework-extra-bundle/Resources/config/serializer'), 'Sulu\\Bundle\\CoreBundle' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/CoreBundle/Resources/config/serializer'), 'Doctrine\\Bundle\\DoctrineBundle' => ($this->targetDirs[4].'/vendor/doctrine/doctrine-bundle/Resources/config/serializer'), 'Doctrine\\Bundle\\DoctrineCacheBundle' => ($this->targetDirs[4].'/vendor/doctrine/doctrine-cache-bundle/Resources/config/serializer'), 'Symfony\\Cmf\\Bundle\\CoreBundle' => ($this->targetDirs[4].'/vendor/symfony-cmf/core-bundle/Resources/config/serializer'), 'Doctrine\\Bundle\\FixturesBundle' => ($this->targetDirs[4].'/vendor/doctrine/doctrine-fixtures-bundle/Resources/config/serializer'), 'Doctrine\\Bundle\\PHPCRBundle' => ($this->targetDirs[4].'/vendor/doctrine/phpcr-bundle/Resources/config/serializer'), 'Stof\\DoctrineExtensionsBundle' => ($this->targetDirs[4].'/vendor/stof/doctrine-extensions-bundle/Stof/DoctrineExtensionsBundle/Resources/config/serializer'), 'FOS\\RestBundle' => ($this->targetDirs[4].'/vendor/friendsofsymfony/rest-bundle/FOS/RestBundle/Resources/config/serializer'), 'JMS\\SerializerBundle' => ($this->targetDirs[4].'/vendor/jms/serializer-bundle/JMS/SerializerBundle/Resources/config/serializer'), 'Bazinga\\Bundle\\HateoasBundle' => ($this->targetDirs[4].'/vendor/willdurand/hateoas-bundle/Bazinga/Bundle/HateoasBundle/Resources/config/serializer'), 'Massive\\Bundle\\SearchBundle' => ($this->targetDirs[4].'/vendor/massive/search-bundle/Resources/config/serializer'), 'Sulu\\Bundle\\SearchBundle' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/SearchBundle/Resources/config/serializer'), 'Sulu\\Bundle\\PersistenceBundle' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/PersistenceBundle/Resources/config/serializer'), 'Sulu\\Bundle\\ContactBundle' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/Resources/config/serializer'), 'Sulu\\Bundle\\MediaBundle' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Resources/config/serializer'), 'Sulu\\Bundle\\SecurityBundle' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/Resources/config/serializer'), 'Sulu\\Bundle\\CategoryBundle' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/Resources/config/serializer'), 'Sulu\\Bundle\\SnippetBundle' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/SnippetBundle/Resources/config/serializer'), 'Sulu\\Bundle\\ContentBundle' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/ContentBundle/DependencyInjection/../Resources/config/serializer'), 'Sulu\\Bundle\\TagBundle' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/TagBundle/Resources/config/serializer'), 'Sulu\\Bundle\\WebsiteBundle' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Resources/config/serializer'), 'Sulu\\Bundle\\LocationBundle' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/LocationBundle/Resources/config/serializer'), 'Sulu\\Bundle\\HttpCacheBundle' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/HttpCacheBundle/Resources/config/serializer'), 'Sulu\\Bundle\\WebsocketBundle' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/WebsocketBundle/Resources/config/serializer'), 'Sulu\\Bundle\\TranslateBundle' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/TranslateBundle/Resources/config/serializer'), 'Sulu\\Bundle\\DocumentManagerBundle' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Resources/config/serializer'), 'Sulu\\Bundle\\HashBundle' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/HashBundle/Resources/config/serializer'), 'Sulu\\Bundle\\CustomUrlBundle' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/CustomUrlBundle/Resources/config/serializer'), 'DTL\\Bundle\\PhpcrMigrations' => ($this->targetDirs[4].'/vendor/dantleech/phpcr-migrations-bundle/Resources/config/serializer'), 'Dubture\\FFmpegBundle' => ($this->targetDirs[4].'/vendor/pulse00/ffmpeg-bundle/Resources/config/serializer'), 'Client\\Bundle\\WebsiteBundle' => ($this->targetDirs[4].'/src/Client/Bundle/WebsiteBundle/Resources/config/serializer'), 'Liip\\ThemeBundle' => ($this->targetDirs[4].'/vendor/liip/theme-bundle/Liip/ThemeBundle/Resources/config/serializer'), 'Massive\\Bundle\\BuildBundle' => ($this->targetDirs[4].'/vendor/massive/build-bundle/Resources/config/serializer'), 'Symfony\\Bundle\\WebProfilerBundle' => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/config/serializer'), 'Sensio\\Bundle\\DistributionBundle' => ($this->targetDirs[4].'/vendor/sensio/distribution-bundle/Resources/config/serializer'), 'Sensio\\Bundle\\GeneratorBundle' => ($this->targetDirs[4].'/vendor/sensio/generator-bundle/Resources/config/serializer'), 'Sulu\\Bundle\\TestBundle' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/TestBundle/Resources/config/serializer'), 'Symfony\\Bundle\\DebugBundle' => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/config/serializer'), 'Symfony\\Cmf\\Bundle\\RoutingBundle' => ($this->targetDirs[4].'/vendor/symfony-cmf/routing-bundle/Symfony/Cmf/Bundle/RoutingBundle/Resources/config/serializer'), 'Sulu\\Component\\CustomUrl' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/CustomUrlBundle/DependencyInjection/../Resources/config/serializer'), 'Sulu\\Component\\DocumentManager' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/DependencyInjection/../Resources/config/serializer'), 'Sulu\\Component\\Content' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/ContentBundle/DependencyInjection/../Resources/config/serializer'), 'Sulu\\Component\\Webspace' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/ContentBundle/DependencyInjection/../Resources/config/serializer'), 'Sulu\\Bundle\\CategoryBundle\\Entity' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/DependencyInjection/../Resources/config/serializer'), 'Massive\\Bundle\\SearchBundle\\Search' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/SearchBundle/Resources/config/serializer/massive'), 'Sulu\\Bundle\\SearchBundle\\Search' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/SearchBundle/Resources/config/serializer/sulu')));
    }

    /**
     * Gets the 'jms_serializer.metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Metadata\MetadataFactory A Metadata\MetadataFactory instance.
     */
    protected function getJmsSerializer_MetadataFactoryService()
    {
        $this->services['jms_serializer.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);

        $instance->setCache(new \Metadata\Cache\FileCache((__DIR__.'/jms_serializer')));

        return $instance;
    }

    /**
     * Gets the 'jms_serializer.unserialize_object_constructor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \JMS\Serializer\Construction\UnserializeObjectConstructor A JMS\Serializer\Construction\UnserializeObjectConstructor instance.
     */
    protected function getJmsSerializer_UnserializeObjectConstructorService()
    {
        return $this->services['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor();
    }

    /**
     * Gets the 'phpcr_migrations.version_finder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \PHPCR\Migrations\VersionFinder A PHPCR\Migrations\VersionFinder instance.
     */
    protected function getPhpcrMigrations_VersionFinderService()
    {
        return $this->services['phpcr_migrations.version_finder'] = new \PHPCR\Migrations\VersionFinder(array(0 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/ContentBundle/Resources/phpcr-migrations')));
    }

    /**
     * Gets the 'phpcr_migrations.version_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \PHPCR\Migrations\VersionStorage A PHPCR\Migrations\VersionStorage instance.
     */
    protected function getPhpcrMigrations_VersionStorageService()
    {
        return $this->services['phpcr_migrations.version_storage'] = new \PHPCR\Migrations\VersionStorage($this->get('doctrine_phpcr.default_session'), 'jcr:versions');
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance.
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the 'session.storage.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag A Symfony\Component\HttpFoundation\Session\Storage\MetadataBag instance.
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the 'sulu_contact.util.id_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Sulu\Bundle\ContactBundle\Util\CustomerIdConverter A Sulu\Bundle\ContactBundle\Util\CustomerIdConverter instance.
     */
    protected function getSuluContact_Util_IdConverterService()
    {
        return $this->services['sulu_contact.util.id_converter'] = new \Sulu\Bundle\ContactBundle\Util\CustomerIdConverter();
    }

    /**
     * Gets the 'sulu_contact.util.index_comparator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Sulu\Bundle\ContactBundle\Util\IndexComparator A Sulu\Bundle\ContactBundle\Util\IndexComparator instance.
     */
    protected function getSuluContact_Util_IndexComparatorService()
    {
        return $this->services['sulu_contact.util.index_comparator'] = new \Sulu\Bundle\ContactBundle\Util\IndexComparator();
    }

    /**
     * Gets the 'sulu_content.smart_content.data_provider.content.query_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Sulu\Component\Content\SmartContent\QueryBuilder A Sulu\Component\Content\SmartContent\QueryBuilder instance.
     */
    protected function getSuluContent_SmartContent_DataProvider_Content_QueryBuilderService()
    {
        return $this->services['sulu_content.smart_content.data_provider.content.query_builder'] = new \Sulu\Component\Content\SmartContent\QueryBuilder($this->get('sulu.content.structure_manager'), $this->get('sulu_content.extension.manager'), $this->get('sulu_core.webspace.webspace_manager'), $this->get('sulu.phpcr.session'), 'i18n');
    }

    /**
     * Gets the 'sulu_document_manager.document_registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Sulu\Component\DocumentManager\DocumentRegistry A Sulu\Component\DocumentManager\DocumentRegistry instance.
     */
    protected function getSuluDocumentManager_DocumentRegistryService()
    {
        return $this->services['sulu_document_manager.document_registry'] = new \Sulu\Component\DocumentManager\DocumentRegistry('en');
    }

    /**
     * Gets the 'sulu_document_manager.metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Sulu\Component\DocumentManager\Metadata\MetadataFactory A Sulu\Component\DocumentManager\Metadata\MetadataFactory instance.
     */
    protected function getSuluDocumentManager_MetadataFactoryService()
    {
        return $this->services['sulu_document_manager.metadata_factory'] = new \Sulu\Component\DocumentManager\Metadata\MetadataFactory($this->get('sulu_document_manager.metadata_factory.base'), $this->get('sulu_document_manager.document_strategy'));
    }

    /**
     * Gets the 'sulu_document_manager.metadata_factory.base' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Sulu\Component\DocumentManager\Metadata\BaseMetadataFactory A Sulu\Component\DocumentManager\Metadata\BaseMetadataFactory instance.
     */
    protected function getSuluDocumentManager_MetadataFactory_BaseService()
    {
        return $this->services['sulu_document_manager.metadata_factory.base'] = new \Sulu\Component\DocumentManager\Metadata\BaseMetadataFactory($this->get('sulu_document_manager.event_dispatcher'), array(0 => array('alias' => 'custom_url', 'class' => 'Sulu\\Component\\CustomUrl\\Document\\CustomUrlDocument', 'phpcr_type' => 'sulu:custom_url', 'mapping' => array('title' => array('property' => 'title', 'encoding' => 'content', 'mapped' => true, 'multiple' => false, 'default' => NULL), 'published' => array('property' => 'published', 'encoding' => 'content', 'mapped' => true, 'multiple' => false, 'default' => NULL), 'baseDomain' => array('property' => 'baseDomain', 'encoding' => 'content', 'mapped' => true, 'multiple' => false, 'default' => NULL), 'domainParts' => array('property' => 'domainParts', 'type' => 'json_array', 'encoding' => 'content', 'mapped' => true, 'multiple' => false, 'default' => NULL), 'canonical' => array('property' => 'canonical', 'encoding' => 'content', 'mapped' => true, 'multiple' => false, 'default' => NULL), 'redirect' => array('property' => 'redirect', 'encoding' => 'content', 'mapped' => true, 'multiple' => false, 'default' => NULL), 'targetLocale' => array('property' => 'targetLocale', 'encoding' => 'content', 'mapped' => true, 'multiple' => false, 'default' => NULL))), 1 => array('alias' => 'custom_url_route', 'class' => 'Sulu\\Component\\CustomUrl\\Document\\RouteDocument', 'phpcr_type' => 'sulu:custom_url_route', 'mapping' => array('locale' => array('property' => 'locale', 'encoding' => 'content', 'mapped' => true, 'multiple' => false, 'default' => NULL))), 2 => array('alias' => 'page', 'class' => 'Sulu\\Bundle\\ContentBundle\\Document\\PageDocument', 'phpcr_type' => 'sulu:page', 'mapping' => array()), 3 => array('alias' => 'home', 'class' => 'Sulu\\Bundle\\ContentBundle\\Document\\HomeDocument', 'phpcr_type' => 'sulu:home', 'mapping' => array()), 4 => array('alias' => 'route', 'class' => 'Sulu\\Bundle\\ContentBundle\\Document\\RouteDocument', 'phpcr_type' => 'sulu:path', 'mapping' => array()), 5 => array('alias' => 'snippet', 'class' => 'Sulu\\Bundle\\SnippetBundle\\Document\\SnippetDocument', 'phpcr_type' => 'sulu:snippet', 'mapping' => array())));
    }

    /**
     * Gets the 'sulu_document_manager.namespace_registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Sulu\Component\DocumentManager\NamespaceRegistry A Sulu\Component\DocumentManager\NamespaceRegistry instance.
     */
    protected function getSuluDocumentManager_NamespaceRegistryService()
    {
        return $this->services['sulu_document_manager.namespace_registry'] = new \Sulu\Component\DocumentManager\NamespaceRegistry(array('extension_localized' => 'i18n', 'system' => 'sulu', 'system_localized' => 'i18n', 'content' => NULL, 'content_localized' => 'i18n'));
    }

    /**
     * Gets the 'sulu_document_manager.node_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Sulu\Component\DocumentManager\NodeManager A Sulu\Component\DocumentManager\NodeManager instance.
     */
    protected function getSuluDocumentManager_NodeManagerService()
    {
        return $this->services['sulu_document_manager.node_manager'] = new \Sulu\Component\DocumentManager\NodeManager($this->get('doctrine_phpcr.default_session'));
    }

    /**
     * Gets the 'sulu_document_manager.path_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Sulu\Component\DocumentManager\PathBuilder A Sulu\Component\DocumentManager\PathBuilder instance.
     */
    protected function getSuluDocumentManager_PathBuilderService()
    {
        return $this->services['sulu_document_manager.path_builder'] = new \Sulu\Component\DocumentManager\PathBuilder($this->get('sulu_document_manager.path_segment_registry'));
    }

    /**
     * Gets the 'sulu_document_manager.property_encoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Bridge\PropertyEncoder A Sulu\Bundle\DocumentManagerBundle\Bridge\PropertyEncoder instance.
     */
    protected function getSuluDocumentManager_PropertyEncoderService()
    {
        return $this->services['sulu_document_manager.property_encoder'] = new \Sulu\Bundle\DocumentManagerBundle\Bridge\PropertyEncoder($this->get('sulu_document_manager.namespace_registry'));
    }

    /**
     * Gets the 'sulu_document_manager.proxy_manager.configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \ProxyManager\Configuration A ProxyManager\Configuration instance.
     */
    protected function getSuluDocumentManager_ProxyManager_ConfigurationService()
    {
        $this->services['sulu_document_manager.proxy_manager.configuration'] = $instance = new \ProxyManager\Configuration();

        $instance->setProxiesTargetDir((__DIR__.'/sulu/documents'));

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.eventdispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Swift_Events_SimpleEventDispatcher A Swift_Events_SimpleEventDispatcher instance.
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the 'templating.finder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder A Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder instance.
     */
    protected function getTemplating_FinderService()
    {
        return $this->services['templating.finder'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($this->get('kernel'), $this->get('templating.filename_parser'), ($this->targetDirs[3].'/Resources'));
    }

    /**
     * Gets the 'translator.data_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator A Symfony\Component\Translation\DataCollectorTranslator instance.
     */
    protected function getTranslator_DataCollectorService()
    {
        return $this->services['translator.data_collector'] = new \Symfony\Component\Translation\DataCollectorTranslator(new \Symfony\Component\Translation\LoggingTranslator($this->get('translator.default'), $this->get('monolog.logger.translation')));
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => $this->targetDirs[3],
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[3].'/logs/website/dev'),
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'SuluCoreBundle' => 'Sulu\\Bundle\\CoreBundle\\SuluCoreBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'CmfCoreBundle' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\CmfCoreBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'DoctrinePHPCRBundle' => 'Doctrine\\Bundle\\PHPCRBundle\\DoctrinePHPCRBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'BazingaHateoasBundle' => 'Bazinga\\Bundle\\HateoasBundle\\BazingaHateoasBundle',
                'MassiveSearchBundle' => 'Massive\\Bundle\\SearchBundle\\MassiveSearchBundle',
                'SuluSearchBundle' => 'Sulu\\Bundle\\SearchBundle\\SuluSearchBundle',
                'SuluPersistenceBundle' => 'Sulu\\Bundle\\PersistenceBundle\\SuluPersistenceBundle',
                'SuluContactBundle' => 'Sulu\\Bundle\\ContactBundle\\SuluContactBundle',
                'SuluMediaBundle' => 'Sulu\\Bundle\\MediaBundle\\SuluMediaBundle',
                'SuluSecurityBundle' => 'Sulu\\Bundle\\SecurityBundle\\SuluSecurityBundle',
                'SuluCategoryBundle' => 'Sulu\\Bundle\\CategoryBundle\\SuluCategoryBundle',
                'SuluSnippetBundle' => 'Sulu\\Bundle\\SnippetBundle\\SuluSnippetBundle',
                'SuluContentBundle' => 'Sulu\\Bundle\\ContentBundle\\SuluContentBundle',
                'SuluTagBundle' => 'Sulu\\Bundle\\TagBundle\\SuluTagBundle',
                'SuluWebsiteBundle' => 'Sulu\\Bundle\\WebsiteBundle\\SuluWebsiteBundle',
                'SuluLocationBundle' => 'Sulu\\Bundle\\LocationBundle\\SuluLocationBundle',
                'SuluHttpCacheBundle' => 'Sulu\\Bundle\\HttpCacheBundle\\SuluHttpCacheBundle',
                'SuluWebsocketBundle' => 'Sulu\\Bundle\\WebsocketBundle\\SuluWebsocketBundle',
                'SuluTranslateBundle' => 'Sulu\\Bundle\\TranslateBundle\\SuluTranslateBundle',
                'SuluDocumentManagerBundle' => 'Sulu\\Bundle\\DocumentManagerBundle\\SuluDocumentManagerBundle',
                'SuluHashBundle' => 'Sulu\\Bundle\\HashBundle\\SuluHashBundle',
                'SuluCustomUrlBundle' => 'Sulu\\Bundle\\CustomUrlBundle\\SuluCustomUrlBundle',
                'PhpcrMigrationsBundle' => 'DTL\\Bundle\\PhpcrMigrations\\PhpcrMigrationsBundle',
                'DubtureFFmpegBundle' => 'Dubture\\FFmpegBundle\\DubtureFFmpegBundle',
                'ClientWebsiteBundle' => 'Client\\Bundle\\WebsiteBundle\\ClientWebsiteBundle',
                'LiipThemeBundle' => 'Liip\\ThemeBundle\\LiipThemeBundle',
                'MassiveBuildBundle' => 'Massive\\Bundle\\BuildBundle\\MassiveBuildBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
                'SuluTestBundle' => 'Sulu\\Bundle\\TestBundle\\SuluTestBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'CmfRoutingBundle' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\CmfRoutingBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'sulu.context' => 'website',
            'database_driver' => 'pdo_mysql',
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'sulu',
            'database_user' => 'root',
            'database_password' => NULL,
            'database_version' => 5.5,
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'sulu_admin.name' => 'Sulu',
            'sulu_admin.email' => NULL,
            'websocket_port' => 9876,
            'websocket_url' => 'sulu.lo',
            'phpcr_backend' => array(
                'type' => 'doctrinedbal',
            ),
            'phpcr_workspace' => 'default',
            'phpcr_user' => 'admin',
            'phpcr_pass' => 'admin',
            'phpcr_cache' => 'file_system',
            'locale' => 'en',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'request_stack.class' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\LazyLoadingFragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\HIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.renderer.esi.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer',
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.loader.json.class' => 'Symfony\\Component\\Translation\\Loader\\JsonFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.json.class' => 'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'en',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.metadata_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session.handler.write_check.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.save_path' => (__DIR__.'/../../sessions/website/dev'),
            'session.metadata.update_threshold' => '0',
            'security.secure_random.class' => 'Symfony\\Component\\Security\\Core\\Util\\SecureRandom',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.type_extension.form.request_handler.class' => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'security.csrf.token_generator.class' => 'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator',
            'security.csrf.token_storage.class' => 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage',
            'security.csrf.token_manager.class' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManager',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.helper.assets.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\AssetsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.code.file_link_format' => NULL,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
            'validator.builder.class' => 'Symfony\\Component\\Validator\\ValidatorBuilderInterface',
            'validator.builder.factory.class' => 'Symfony\\Component\\Validator\\Validation',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.expression.class' => 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator',
            'validator.email.class' => 'Symfony\\Component\\Validator\\Constraints\\EmailValidator',
            'validator.translation_domain' => 'validators',
            'validator.api' => '2.5-bc',
            'fragment.listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener',
            'translator.logging' => true,
            'profiler.class' => 'Symfony\\Component\\HttpKernel\\Profiler\\Profiler',
            'profiler_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener',
            'data_collector.config.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector',
            'data_collector.request.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector',
            'data_collector.exception.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector',
            'data_collector.events.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector',
            'data_collector.logger.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector',
            'data_collector.time.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector',
            'data_collector.memory.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector',
            'data_collector.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RouterDataCollector',
            'form.resolved_type_factory.data_collector_proxy.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Proxy\\ResolvedTypeFactoryDataCollectorProxy',
            'form.type_extension.form.data_collector.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension',
            'data_collector.form.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataCollector',
            'data_collector.form.extractor.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataExtractor',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => ('file:'.__DIR__.'/profiler'),
            'profiler.storage.username' => '',
            'profiler.storage.password' => '',
            'profiler.storage.lifetime' => 86400,
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appDevUrlMatcher',
            'router.options.generator.cache_class' => 'appDevUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => (__DIR__.'/assetic/routing.yml'),
            'router.cache_class_prefix' => 'appDev',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'debug.debug_handlers_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener',
            'debug.stopwatch.class' => 'Symfony\\Component\\Stopwatch\\Stopwatch',
            'debug.error_handler.throw_at' => -1,
            'debug.event_dispatcher.class' => 'Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher',
            'debug.container.dump' => (__DIR__.'/appDevDebugProjectContainer.xml'),
            'debug.controller_resolver.class' => 'Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver',
            'twig.class' => 'Twig_Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.extension.debug.stopwatch.class' => 'Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension',
            'twig.extension.expression.class' => 'Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.controller.preview_error.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\PreviewErrorController',
            'twig.exception_listener.controller' => 'sulu_website.exception.controller:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => 'CmfCoreBundle:Form:checkbox_url_label_form_type.html.twig',
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.gelfphp.publisher.class' => 'Gelf\\Publisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.console.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.deduplication.class' => 'Monolog\\Handler\\DeduplicationHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.syslogudp.class' => 'Monolog\\Handler\\SyslogUdpHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.rollbar.class' => 'Monolog\\Handler\\RollbarHandler',
            'monolog.handler.flowdock.class' => 'Monolog\\Handler\\FlowdockHandler',
            'monolog.handler.browser_console.class' => 'Monolog\\Handler\\BrowserConsoleHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Symfony\\Bridge\\Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.newrelic.class' => 'Monolog\\Handler\\NewRelicHandler',
            'monolog.handler.hipchat.class' => 'Monolog\\Handler\\HipChatHandler',
            'monolog.handler.slack.class' => 'Monolog\\Handler\\SlackHandler',
            'monolog.handler.cube.class' => 'Monolog\\Handler\\CubeHandler',
            'monolog.handler.amqp.class' => 'Monolog\\Handler\\AmqpHandler',
            'monolog.handler.error_log.class' => 'Monolog\\Handler\\ErrorLogHandler',
            'monolog.handler.loggly.class' => 'Monolog\\Handler\\LogglyHandler',
            'monolog.handler.logentries.class' => 'Monolog\\Handler\\LogEntriesHandler',
            'monolog.handler.whatfailuregroup.class' => 'Monolog\\Handler\\WhatFailureGroupHandler',
            'monolog.activation_strategy.not_found.class' => 'Symfony\\Bundle\\MonologBundle\\NotFoundActivationStrategy',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handler.filter.class' => 'Monolog\\Handler\\FilterHandler',
            'monolog.handler.mongo.class' => 'Monolog\\Handler\\MongoDBHandler',
            'monolog.mongo.client.class' => 'MongoClient',
            'monolog.handler.elasticsearch.class' => 'Monolog\\Handler\\ElasticSearchHandler',
            'monolog.elastica.client.class' => 'Elastica\\Client',
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console_very_verbose' => array(
                    'type' => 'inclusive',
                    'elements' => array(
                        0 => 'doctrine',
                    ),
                ),
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'doctrine',
                    ),
                ),
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.worker.cache_busting.class' => 'Assetic\\Factory\\Worker\\CacheBustingWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => (__DIR__.'/assetic'),
            'assetic.bundles' => array(
                0 => 'ClientWebsiteBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => true,
            'assetic.use_controller' => true,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => ($this->targetDirs[3].'/../web'),
            'assetic.write_to' => ($this->targetDirs[3].'/../web'),
            'assetic.variables' => array(

            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/local/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.reactjsx.bin' => '/usr/bin/jsx',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.twig_extension.functions' => array(

            ),
            'assetic.controller.class' => 'Symfony\\Bundle\\AsseticBundle\\Controller\\AsseticController',
            'assetic.routing_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Routing\\AsseticLoader',
            'assetic.cache.class' => 'Assetic\\Cache\\FilesystemCache',
            'assetic.use_controller_worker.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Worker\\UseControllerWorker',
            'assetic.request_listener.class' => 'Symfony\\Bundle\\AsseticBundle\\EventListener\\RequestListener',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'sulu_core.locales' => array(
                0 => 'de',
                1 => 'en',
                2 => 'fr',
            ),
            'sulu_core.translated_locales' => array(
                'de' => 'Deutsch',
                'en' => 'English',
                'fr' => 'Français',
            ),
            'sulu_core.translations' => array(
                0 => 'de',
                1 => 'en',
                2 => 'fr',
            ),
            'sulu_core.fallback_locale' => 'en',
            'sulu.cache_dir' => (__DIR__.'/sulu'),
            'sulu.phpcr.session.class' => 'Sulu\\Component\\PHPCR\\SessionManager\\SessionManager',
            'sulu.content.language.namespace' => 'i18n',
            'sulu.content.language.default' => 'en',
            'sulu.content.node_names.base' => 'cmf',
            'sulu.content.node_names.content' => 'contents',
            'sulu.content.node_names.route' => 'routes',
            'sulu.content.node_names.snippet' => 'snippets',
            'sulu.content.type.text_line.template' => 'SuluContentBundle:Template:content-types/text_line.html.twig',
            'sulu.content.type.text_area.template' => 'SuluContentBundle:Template:content-types/text_area.html.twig',
            'sulu.content.type.text_editor.template' => 'SuluContentBundle:Template:content-types/text_editor.html.twig',
            'sulu.content.type.resource_locator.template' => 'SuluContentBundle:Template:content-types/resource_locator.html.twig',
            'sulu.content.type.block.template' => 'SuluContentBundle:Template:content-types/block.html.twig',
            'sulu.content.structure.default_types' => array(
                'snippet' => 'default',
            ),
            'sulu.content.structure.default_type.snippet' => 'default',
            'sulu.content.internal_prefix' => '',
            'sulu.content.structure.type_map' => array(
                'page' => '\\Sulu\\Component\\Content\\Compat\\Structure\\PageBridge',
                'home' => '\\Sulu\\Component\\Content\\Compat\\Structure\\PageBridge',
                'snippet' => '\\Sulu\\Component\\Content\\Compat\\Structure\\SnippetBridge',
            ),
            'sulu.content.structure.paths' => array(
                'page' => array(
                    0 => array(
                        'path' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/ContentBundle/DependencyInjection/../Content/templates'),
                        'type' => 'page',
                    ),
                    1 => array(
                        'path' => ($this->targetDirs[3].'/Resources/pages'),
                        'type' => 'page',
                    ),
                    2 => array(
                        'path' => ($this->targetDirs[3].'/../vendor/sulu/sulu/src/Sulu/Bundle/CoreBundle/Content/templates'),
                        'type' => 'page',
                    ),
                ),
                'home' => array(
                    0 => array(
                        'path' => ($this->targetDirs[3].'/Resources/pages'),
                        'type' => 'home',
                    ),
                ),
                'snippet' => array(
                    0 => array(
                        'path' => ($this->targetDirs[3].'/Resources/snippets'),
                        'type' => 'snippet',
                    ),
                ),
            ),
            'sulu.content.path_cleaner.replacer_loader.file_locator.class' => 'Symfony\\Component\\Config\\FileLocator',
            'sulu.content.path_cleaner.replacer_loader.class' => 'Sulu\\Bundle\\CoreBundle\\DataFixtures\\ReplacerXmlLoader',
            'sulu.content.path_cleaner.class' => 'Sulu\\Component\\PHPCR\\PathCleanup',
            'sulu.content.template_resolver.class' => 'Sulu\\Component\\Content\\Template\\TemplateResolver',
            'sulu.content.mapper.class' => 'Sulu\\Component\\Content\\Mapper\\ContentMapper',
            'sulu.content.structure_manager.class' => 'Sulu\\Component\\Content\\Compat\\StructureManager',
            'sulu.content.webspace_structure_provider.cache.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'sulu.content.webspace_structure_provider.class' => 'Sulu\\Component\\Webspace\\StructureProvider\\WebspaceStructureProvider',
            'sulu.content.type_manager.class' => 'Sulu\\Component\\Content\\ContentTypeManager',
            'sulu.content.type.text_line.class' => 'Sulu\\Component\\Content\\Types\\TextLine',
            'sulu.content.type.text_area.class' => 'Sulu\\Component\\Content\\Types\\TextArea',
            'sulu.content.type.text_editor.class' => 'Sulu\\Component\\Content\\Types\\TextEditor',
            'sulu.content.type.resource_locator.class' => 'Sulu\\Component\\Content\\Types\\ResourceLocator',
            'sulu.content.type.block.class' => 'Sulu\\Component\\Content\\Types\\BlockContentType',
            'sulu.content.rlp.mapper.phpcr.class' => 'Sulu\\Component\\Content\\Types\\Rlp\\Mapper\\PhpcrMapper',
            'sulu.content.rlp.strategy.tree.class' => 'Sulu\\Component\\Content\\Types\\Rlp\\Strategy\\TreeStrategy',
            'sulu.content.query_executor.class' => 'Sulu\\Component\\Content\\Query\\ContentQueryExecutor',
            'sulu.cache.warmer.structure.class' => 'Sulu\\Bundle\\CoreBundle\\Cache\\StructureWarmer',
            'sulu.util.node_helper.class' => 'Sulu\\Component\\Util\\SuluNodeHelper',
            'sulu_core.webspace.config_dir' => ($this->targetDirs[3].'/Resources/webspaces'),
            'sulu_core.webspace.webspace_manager.class' => 'Sulu\\Component\\Webspace\\Manager\\WebspaceManager',
            'sulu_core.webspace.loader.xml_class' => 'Sulu\\Component\\Webspace\\Loader\\XmlFileLoader',
            'sulu_core.webspace.cache_class' => 'WebspaceCollectionCache',
            'sulu_core.webspace.base_class' => 'WebspaceCollection',
            'sulu_core.webspace.document_manager.webspace_initializer.class' => 'Sulu\\Component\\Webspace\\Document\\Initializer\\WebspaceInitializer',
            'sulu_core.cache.memoize.default_lifetime' => 1,
            'sulu_core.cache.memoize.cache.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'sulu_core.cache.memoize.class' => 'Sulu\\Component\\Cache\\Memoize',
            'sulu.fields_defaults.translations' => array(
                'id' => 'public.id',
                'title' => 'public.title',
                'name' => 'public.name',
                'created' => 'public.created',
                'changed' => 'public.changed',
            ),
            'sulu.fields_defaults.widths' => array(
                'id' => '50px',
            ),
            'sulu_core.list_builder.metadata.provider.general.cache_dir' => (__DIR__.'/sulu/list-builder/general'),
            'sulu_core.list_builder.metadata.provider.doctrine.cache_dir' => (__DIR__.'/sulu/list-builder/doctrine'),
            'sulu_core.rest_helper.class' => 'Sulu\\Component\\Rest\\RestHelper',
            'sulu_core.doctrine_rest_helper.class' => 'Sulu\\Component\\Rest\\DoctrineRestHelper',
            'sulu_core.list_rest_helper.class' => 'Sulu\\Component\\Rest\\ListBuilder\\ListRestHelper',
            'sulu_core.doctrine_list_builder_factory.class' => 'Sulu\\Component\\Rest\\ListBuilder\\Doctrine\\DoctrineListBuilderFactory',
            'sulu_core.rest.datetime_handler.class' => 'Sulu\\Component\\Rest\\Handler\\DateHandler',
            'sulu_core.build.builder.database.class' => 'Sulu\\Bundle\\CoreBundle\\Build\\DatabaseBuilder',
            'sulu_core.build.builder.phpcr.class' => 'Sulu\\Bundle\\CoreBundle\\Build\\PhpcrBuilder',
            'sulu_core.build.builder.phpcr_migrations.class' => 'Sulu\\Bundle\\CoreBundle\\Build\\PhpcrMigrationsBuilder',
            'sulu_core.build.builder.fixtures.class' => 'Sulu\\Bundle\\CoreBundle\\Build\\FixturesBuilder',
            'sulu_core.build.builder.node_order.class' => 'Sulu\\Bundle\\CoreBundle\\Build\\NodeOrderBuilder',
            'sulu.core.localization_manager.class' => 'Sulu\\Component\\Localization\\Manager\\LocalizationManager',
            'sulu.core.localization_manager.core_provider.class' => 'Sulu\\Component\\Localization\\Provider\\LocalizationProvider',
            'sulu_core.array_serialization_visitor.class' => 'Sulu\\Component\\Serializer\\ArraySerializationVisitor',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\ORM\\Mapping\\DefaultEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'cmf_core.persistence.phpcr.manager_name' => NULL,
            'cmf_core.twig_extension.class' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\Twig\\Extension\\CmfExtension',
            'cmf_core.templating.helper.class' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\Templating\\Helper\\CmfHelper',
            'cmf_core.publish_workflow.checker.class' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\PublishWorkflow\\AlwaysPublishedWorkflowChecker',
            'cmf_core.persistence.phpcr.non_translatable_metadata_listener.class' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\Doctrine\\Phpcr\\NonTranslatableMetadataListener',
            'cmf_core.phpcr.multilang.locales' => array(

            ),
            'cmf_core.sonata_admin.extension.publishable.form_group' => 'form.group_publish_workflow',
            'cmf_core.sonata_admin.extension.publish_time.form_group' => 'form.group_publish_workflow',
            'cmf_core.sonata_admin.extension.translatable.form_group' => 'form.group_general',
            'cmf_core.form.type.checkbox_url_label.class' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\Form\\Type\\CheckboxUrlLabelFormType',
            'doctrine_phpcr.credentials.class' => 'PHPCR\\SimpleCredentials',
            'doctrine_phpcr.class' => 'Doctrine\\Bundle\\PHPCRBundle\\ManagerRegistry',
            'doctrine_phpcr.proxy.class' => 'Doctrine\\Common\\Proxy\\Proxy',
            'doctrine_phpcr.sessions' => array(
                'default' => 'doctrine_phpcr.default_session',
            ),
            'doctrine_phpcr.odm.document_managers' => array(
                'default' => 'doctrine_phpcr.odm.default_document_manager',
            ),
            'doctrine_phpcr.default_session' => 'default',
            'doctrine_phpcr.odm.default_document_manager' => 'default',
            'doctrine_phpcr.console_dumper.class' => 'PHPCR\\Util\\Console\\Helper\\PhpcrConsoleDumperHelper',
            'doctrine_phpcr.initializer_manager.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Initializer\\InitializerManager',
            'doctrine_phpcr.form.type.phpcr_reference.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Form\\Type\\PHPCRReferenceType',
            'doctrine_phpcr.logger.chain.class' => 'Jackalope\\Transport\\Logging\\LoggerChain',
            'doctrine_phpcr.logger.class' => 'Jackalope\\Transport\\Logging\\Psr3Logger',
            'doctrine_phpcr.logger.profiling.class' => 'Jackalope\\Transport\\Logging\\DebugStack',
            'doctrine_phpcr.logger.stop_watch.class' => 'Doctrine\\Bundle\\PHPCRBundle\\DataCollector\\StopWatchLogger',
            'doctrine_phpcr.data_collector.class' => 'Doctrine\\Bundle\\PHPCRBundle\\DataCollector\\PHPCRDataCollector',
            'doctrine_phpcr.session.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine_phpcr.dump_max_line_length' => 120,
            'doctrine_phpcr.jackalope_doctrine_dbal.schema_listener.class' => 'Doctrine\\Bundle\\PHPCRBundle\\EventListener\\JackalopeDoctrineDbalSchemaListener',
            'doctrine_phpcr.jackalope_doctrine_dbal.repository_schema.class' => 'Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema',
            'doctrine_phpcr.odm.configuration.class' => 'Doctrine\\ODM\\PHPCR\\Configuration',
            'doctrine_phpcr.odm.document_manager.class' => 'Doctrine\\ODM\\PHPCR\\DocumentManager',
            'doctrine_phpcr.odm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_phpcr.odm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_phpcr.odm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_phpcr.odm.cache.memcache_host' => 'localhost',
            'doctrine_phpcr.odm.cache.memcache_port' => 11211,
            'doctrine_phpcr.odm.cache.memcache_instance.class' => 'Memcache',
            'doctrine_phpcr.odm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_phpcr.odm.cache.memcached_host' => 'localhost',
            'doctrine_phpcr.odm.cache.memcached_port' => 11211,
            'doctrine_phpcr.odm.cache.memcached_instance.class' => 'Memcached',
            'doctrine_phpcr.odm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'form.type_guesser.doctrine_phpcr.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Form\\PhpcrOdmTypeGuesser',
            'doctrine_phpcr.odm.form.path.type.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Form\\Type\\PathType',
            'doctrine_phpcr.odm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine_phpcr.odm.metadata.annotation.class' => 'Doctrine\\ODM\\PHPCR\\Mapping\\Driver\\AnnotationDriver',
            'doctrine_phpcr.odm.metadata.xml.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Mapping\\Driver\\XmlDriver',
            'doctrine_phpcr.odm.metadata.yml.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Mapping\\Driver\\YamlDriver',
            'doctrine_phpcr.odm.metadata.php.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine_phpcr.odm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'doctrine_phpcr.odm.validator.valid_phpcr_odm.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Validator\\Constraints\\ValidPhpcrOdmValidator',
            'doctrine_phpcr.odm.auto_generate_proxy_classes' => false,
            'doctrine_phpcr.odm.proxy_dir' => (__DIR__.'/doctrine/PHPCRProxies'),
            'doctrine_phpcr.odm.proxy_namespace' => 'PHPCRProxies',
            'doctrine_phpcr.form.type_guess' => array(

            ),
            'stof_doctrine_extensions.event_listener.locale.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener',
            'stof_doctrine_extensions.event_listener.logger.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener',
            'stof_doctrine_extensions.event_listener.blame.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\BlameListener',
            'stof_doctrine_extensions.uploadable.manager.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadableManager',
            'stof_doctrine_extensions.uploadable.mime_type_guesser.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\MimeTypeGuesserAdapter',
            'stof_doctrine_extensions.uploadable.default_file_info.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo',
            'stof_doctrine_extensions.default_locale' => 'en',
            'stof_doctrine_extensions.default_file_path' => NULL,
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.uploadable.validate_writable_directory' => true,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'fos_rest.serializer.exclusion_strategy.version' => '',
            'fos_rest.serializer.exclusion_strategy.groups' => '',
            'fos_rest.view_handler.jsonp.callback_param' => '',
            'fos_rest.view.exception_wrapper_handler' => 'FOS\\RestBundle\\View\\ExceptionWrapperHandler',
            'fos_rest.view_handler.default.class' => 'FOS\\RestBundle\\View\\ViewHandler',
            'fos_rest.view_handler.jsonp.class' => 'FOS\\RestBundle\\View\\JsonpHandler',
            'fos_rest.serializer.exception_wrapper_serialize_handler.class' => 'FOS\\RestBundle\\Serializer\\ExceptionWrapperSerializeHandler',
            'fos_rest.routing.loader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteLoader',
            'fos_rest.routing.loader.yaml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestYamlCollectionLoader',
            'fos_rest.routing.loader.xml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestXmlCollectionLoader',
            'fos_rest.routing.loader.processor.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteProcessor',
            'fos_rest.routing.loader.reader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestControllerReader',
            'fos_rest.routing.loader.reader.action.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestActionReader',
            'fos_rest.format_negotiator.class' => 'FOS\\RestBundle\\Util\\FormatNegotiator',
            'fos_rest.inflector.class' => 'FOS\\RestBundle\\Util\\Inflector\\DoctrineInflector',
            'fos_rest.request_matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'fos_rest.violation_formatter.class' => 'FOS\\RestBundle\\Util\\ViolationFormatter',
            'fos_rest.request.param_fetcher.class' => 'FOS\\RestBundle\\Request\\ParamFetcher',
            'fos_rest.request.param_fetcher.reader.class' => 'FOS\\RestBundle\\Request\\ParamReader',
            'fos_rest.cache_dir' => (__DIR__.'/fos_rest'),
            'fos_rest.routing.loader.default_format' => 'json',
            'fos_rest.routing.loader.include_format' => true,
            'fos_rest.serializer.serialize_null' => false,
            'fos_rest.exception.codes' => array(
                'Sulu\\Component\\DocumentManager\\Exception\\DocumentNotFoundException' => 404,
                'Sulu\\Component\\CustomUrl\\Manager\\TitleAlreadyExistsException' => 400,
                'Sulu\\Component\\CustomUrl\\Generator\\MissingDomainPartException' => 400,
                'Sulu\\Component\\CustomUrl\\Manager\\RouteNotRemovableException' => 420,
                'Sulu\\Component\\Content\\Exception\\MandatoryPropertyException' => 400,
                'Sulu\\Component\\Content\\Exception\\ResourceLocatorAlreadyExistsException' => 409,
                'Sulu\\Bundle\\CategoryBundle\\Category\\Exception\\KeywordIsMultipleReferencedException' => 409,
                'Sulu\\Bundle\\CategoryBundle\\Category\\Exception\\KeywordNotUniqueException' => 409,
                'Sulu\\Component\\Rest\\Exception\\InvalidHashException' => 409,
                'Sulu\\Component\\Rest\\Csv\\ObjectNotSupportedException' => 406,
            ),
            'fos_rest.exception.messages' => array(

            ),
            'fos_rest.converter.request_body.validation_errors_argument' => 'validationErrors',
            'fos_rest.mime_types' => array(

            ),
            'fos_rest.formats' => array(
                'json' => false,
                'xml' => false,
                'html' => true,
            ),
            'fos_rest.force_redirects' => array(
                'html' => 302,
            ),
            'fos_rest.failed_validation' => 400,
            'fos_rest.empty_content' => 204,
            'fos_rest.serialize_null' => false,
            'fos_rest.default_engine' => 'twig',
            'fos_rest.normalizer.camel_keys.class' => 'FOS\\RestBundle\\Normalizer\\CamelKeysNormalizer',
            'fos_rest.decoder.json.class' => 'FOS\\RestBundle\\Decoder\\JsonDecoder',
            'fos_rest.decoder.jsontoform.class' => 'FOS\\RestBundle\\Decoder\\JsonToFormDecoder',
            'fos_rest.decoder.xml.class' => 'FOS\\RestBundle\\Decoder\\XmlDecoder',
            'fos_rest.decoder_provider.class' => 'FOS\\RestBundle\\Decoder\\ContainerDecoderProvider',
            'fos_rest.body_listener.class' => 'FOS\\RestBundle\\EventListener\\BodyListener',
            'fos_rest.throw_exception_on_unsupported_content_type' => false,
            'fos_rest.body_default_format' => NULL,
            'fos_rest.decoders' => array(
                'json' => 'fos_rest.decoder.json',
                'xml' => 'fos_rest.decoder.xml',
            ),
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver',
            'jms_serializer.metadata.doctrine_phpcr_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrinePHPCRTypeDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
            'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 0,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => array(

            ),
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry',
            'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler',
            'jms_serializer.form_error_handler.class' => 'JMS\\Serializer\\Handler\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'jms_serializer.stopwatch_subscriber.class' => 'JMS\\SerializerBundle\\Serializer\\StopwatchEventSubscriber',
            'jms_serializer.infer_types_from_doctrine_metadata' => true,
            'hateoas.link_factory.class' => 'Hateoas\\Factory\\LinkFactory',
            'hateoas.links_factory.class' => 'Hateoas\\Factory\\LinksFactory',
            'hateoas.embeds_factory.class' => 'Hateoas\\Factory\\EmbeddedsFactory',
            'hateoas.expression.evaluator.class' => 'Hateoas\\Expression\\ExpressionEvaluator',
            'bazinga_hateoas.expression_language.class' => 'Bazinga\\Bundle\\HateoasBundle\\ExpressionLanguage\\ExpressionLanguage',
            'hateoas.serializer.xml.class' => 'Hateoas\\Serializer\\XmlSerializer',
            'hateoas.serializer.json_hal.class' => 'Hateoas\\Serializer\\JsonHalSerializer',
            'hateoas.serializer.exclusion_manager.class' => 'Hateoas\\Serializer\\ExclusionManager',
            'hateoas.event_subscriber.xml.class' => 'Hateoas\\Serializer\\EventSubscriber\\XmlEventSubscriber',
            'hateoas.event_subscriber.json.class' => 'Hateoas\\Serializer\\EventSubscriber\\JsonEventSubscriber',
            'hateoas.inline_deferrer.embeds.class' => 'Hateoas\\Serializer\\Metadata\\InlineDeferrer',
            'hateoas.inline_deferrer.links.class' => 'Hateoas\\Serializer\\Metadata\\InlineDeferrer',
            'hateoas.configuration.provider.resolver.chain.class' => 'Hateoas\\Configuration\\Provider\\Resolver\\ChainResolver',
            'hateoas.configuration.provider.resolver.method.class' => 'Hateoas\\Configuration\\Provider\\Resolver\\MethodResolver',
            'hateoas.configuration.provider.resolver.static_method.class' => 'Hateoas\\Configuration\\Provider\\Resolver\\StaticMethodResolver',
            'hateoas.configuration.provider.resolver.symfony_container.class' => 'Hateoas\\Configuration\\Provider\\Resolver\\SymfonyContainerResolver',
            'hateoas.configuration.relation_provider.class' => 'Hateoas\\Configuration\\Provider\\RelationProvider',
            'hateoas.configuration.relations_repository.class' => 'Hateoas\\Configuration\\RelationsRepository',
            'hateoas.configuration.metadata.yaml_driver.class' => 'Hateoas\\Configuration\\Metadata\\Driver\\YamlDriver',
            'hateoas.configuration.metadata.xml_driver.class' => 'Hateoas\\Configuration\\Metadata\\Driver\\XmlDriver',
            'hateoas.configuration.metadata.annotation_driver.class' => 'Hateoas\\Configuration\\Metadata\\Driver\\AnnotationDriver',
            'hateoas.generator.registry.class' => 'Hateoas\\UrlGenerator\\UrlGeneratorRegistry',
            'hateoas.generator.symfony.class' => 'Hateoas\\UrlGenerator\\SymfonyUrlGenerator',
            'massive_search.search_manager.class' => 'Massive\\Bundle\\SearchBundle\\Search\\SearchManager',
            'massive_search.object_to_document_converter.class' => 'Massive\\Bundle\\SearchBundle\\Search\\ObjectToDocumentConverter',
            'massive_search.expression_language.class' => 'Massive\\Bundle\\SearchBundle\\Search\\ExpressionLanguage\\MassiveSearchExpressionLanguage',
            'massive_search.search.adapter.zend_lucene.class' => 'Massive\\Bundle\\SearchBundle\\Search\\Adapter\\ZendLuceneAdapter',
            'massive_search.search.adapter.test.class' => 'Massive\\Bundle\\SearchBundle\\Search\\Adapter\\TestAdapter',
            'massive_search.factory_default.class' => 'Massive\\Bundle\\SearchBundle\\Search\\Factory',
            'massive_search.controller.rest.class' => 'Massive\\Bundle\\SearchBundle\\Controller\\SearchController',
            'massive_search.events.index' => 'massive_search.index',
            'massive_search.events.deindex' => 'massive_search.deindex',
            'massive_search.adapter.zend_lucene.basepath' => ($this->targetDirs[3].'/data'),
            'massive_search.adapter.zend_lucene.hide_index_exception' => false,
            'massive_search.adapter.zend_lucene.encoding' => 'UTF-8',
            'massive_search.metadata.prefix' => 'sulu',
            'massive_search.metadata.cache_dir' => (__DIR__.'/massive-search'),
            'massive_search.metadata.debug' => true,
            'massive_search.metadata.driver.xml.class' => 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Driver\\XmlDriver',
            'massive_search.metadata.driver.annotation.class' => 'Symfony\\Cmf\\Bundle\\TreeUiBundle\\Tree\\Metadata\\Driver\\AnnotationDriver',
            'massive_search.metadata.driver.chain.class' => 'Metadata\\Driver\\DriverChain',
            'massive_search.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'massive_search.metadata.factory.class' => 'Metadata\\MetadataFactory',
            'massive_search.metadata.field_evaluator.class' => 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\FieldEvaluator',
            'massive_search.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'massive_search.metadata.provider.default.class' => 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Provider\\DefaultProvider',
            'massive_search.metadata.provider.chain.class' => 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Provider\\ChainProvider',
            'sulu_search.indexes' => array(
                'snippet' => array(
                    'security_context' => 'sulu.global.snippets',
                ),
                'media' => array(
                    'security_context' => 'sulu.media.collections',
                ),
                'contact' => array(
                    'security_context' => 'sulu.contact.people',
                ),
                'account' => array(
                    'security_context' => 'sulu.contact.organizations',
                ),
                'page_sulu_io' => array(
                    'security_context' => 'sulu.webspaces.sulu_io',
                    'name' => 'sulu.io',
                ),
            ),
            'sulu_search.controller.search.class' => 'Sulu\\Bundle\\SearchBundle\\Controller\\SearchController',
            'sulu_search.search.factory.class' => 'Sulu\\Bundle\\SearchBundle\\Search\\Factory',
            'sulu_search.admin.class' => 'Sulu\\Bundle\\SearchBundle\\Admin\\SuluSearchAdmin',
            'sulu_search.build.index.class' => 'Sulu\\Bundle\\SearchBundle\\Build\\IndexBuilder',
            'sulu.persistence.event_subscriber.orm.timestampable.class' => 'Sulu\\Component\\Persistence\\EventSubscriber\\ORM\\TimestampableSubscriber',
            'sulu.persistence.event_subscriber.orm.user_blame.class' => 'Sulu\\Component\\Persistence\\EventSubscriber\\ORM\\UserBlameSubscriber',
            'sulu.persistence.event_subscriber.orm.metadata.class' => 'Sulu\\Component\\Persistence\\EventSubscriber\\ORM\\MetadataSubscriber',
            'sulu_contact.admin.class' => 'Sulu\\Bundle\\ContactBundle\\Admin\\ContactAdmin',
            'sulu_contact.contact_content_navigation_provider.class' => 'Sulu\\Bundle\\ContactBundle\\Admin\\ContactContentNavigationProvider',
            'sulu_contact.account_content_navigation_provider.class' => 'Sulu\\Bundle\\ContactBundle\\Admin\\AccountContentNavigationProvider',
            'sulu_contact.account_listener.class' => 'Sulu\\Bundle\\ContactBundle\\EventListener\\AccountListener',
            'sulu_contact.contact_manager.class' => 'Sulu\\Bundle\\ContactBundle\\Contact\\ContactManager',
            'sulu_contact.account_manager.class' => 'Sulu\\Bundle\\ContactBundle\\Contact\\AccountManager',
            'sulu_contact.customer_manager.class' => 'Sulu\\Bundle\\ContactBundle\\Contact\\CustomerManager',
            'sulu_contact.twig.class' => 'Sulu\\Bundle\\ContactBundle\\Twig\\ContactTwigExtension',
            'sulu_contact.twig.cache.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'sulu_contact.account.entity' => 'SuluContactBundle:Account',
            'sulu_contact.country.entity' => 'SuluContactBundle:Country',
            'sulu_contact.account_repository.class' => 'Sulu\\Bundle\\ContactBundle\\Entity\\AccountRepository',
            'sulu_contact.contact_repository.class' => 'Sulu\\Bundle\\ContactBundle\\Entity\\ContactRepository',
            'sulu_contact.account_factory.class' => 'Sulu\\Bundle\\ContactBundle\\Contact\\AccountFactory',
            'sulu_contact.contact.entity' => 'SuluContactBundle:Contact',
            'sulu_contact.contact_title.entity' => 'SuluContactBundle:ContactTitle',
            'sulu_contact.contact_title_repository.class' => 'Sulu\\Bundle\\ContactBundle\\Entity\\ContactTitleRepository',
            'sulu_contact.smart_content.data_provider.contact.class' => 'Sulu\\Component\\Contact\\SmartContent\\ContactDataProvider',
            'sulu_contact.smart_content.data_provider.account.class' => 'Sulu\\Component\\Contact\\SmartContent\\AccountDataProvider',
            'sulu_contact.util.index_comparator.class' => 'Sulu\\Bundle\\ContactBundle\\Util\\IndexComparator',
            'sulu_contact.util.id_converter.class' => 'Sulu\\Bundle\\ContactBundle\\Util\\CustomerIdConverter',
            'sulu_contact.content.contact.class' => 'Sulu\\Bundle\\ContactBundle\\Content\\Types\\ContactSelectionContentType',
            'sulu_contact.defaults' => array(
                'phoneType' => '1',
                'phoneTypeMobile' => '3',
                'phoneTypeIsdn' => '1',
                'emailType' => '1',
                'addressType' => '1',
                'urlType' => '1',
                'faxType' => '1',
                'country' => '15',
            ),
            'sulu_contact.form_of_address' => array(

            ),
            'sulu_contact.contact_form.category_root' => NULL,
            'sulu_contact.account_form.category_root' => NULL,
            'sulu_contact.content-type.contact.template' => 'SuluContactBundle:Template:content-types/contact-selection.html.twig',
            'sulu.model.contact.class' => 'Sulu\\Bundle\\ContactBundle\\Entity\\Contact',
            'sulu.repository.contact.class' => 'Sulu\\Bundle\\ContactBundle\\Entity\\ContactRepository',
            'sulu.persistence.objects' => array(
                'sulu' => array(
                    'user' => array(
                        'model' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\User',
                        'repository' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\UserRepository',
                    ),
                    'role' => array(
                        'model' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role',
                        'repository' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\RoleRepository',
                    ),
                    'access_control' => array(
                        'model' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\AccessControl',
                        'repository' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\AccessControlRepository',
                    ),
                    'contact' => array(
                        'model' => 'Sulu\\Bundle\\ContactBundle\\Entity\\Contact',
                        'repository' => 'Sulu\\Bundle\\ContactBundle\\Entity\\ContactRepository',
                    ),
                ),
            ),
            'sulu_media.system_collections' => array(
                'sulu_media' => array(
                    'meta_title' => array(
                        'en' => 'Sulu media',
                        'de' => 'Sulu Medien',
                    ),
                    'collections' => array(
                        'preview_image' => array(
                            'meta_title' => array(
                                'en' => 'Preview images',
                                'de' => 'Vorschaubilder',
                            ),
                        ),
                    ),
                ),
                'sulu_contact' => array(
                    'meta_title' => array(
                        'en' => 'Sulu contacts',
                        'de' => 'Sulu Kontakte',
                    ),
                    'collections' => array(
                        'contact' => array(
                            'meta_title' => array(
                                'en' => 'People',
                                'de' => 'Personen',
                            ),
                        ),
                        'account' => array(
                            'meta_title' => array(
                                'en' => 'Organizations',
                                'de' => 'Organisationen',
                            ),
                        ),
                    ),
                ),
            ),
            'sulu_media.format_cache.media_proxy_path' => '/uploads/media/{slug}',
            'sulu_media.media_manager.media_download_path' => '/media/{id}/download/{slug}',
            'sulu_media.format_manager.response_headers' => array(
                'Expires' => '+1 month',
                'Pragma' => 'public',
                'Cache-Control' => 'public',
            ),
            'sulu_media.format_manager.default_imagine_options' => array(

            ),
            'sulu_media.format_manager.config_paths' => array(

            ),
            'sulu_media.format_manager.mime_types' => array(
                0 => 'image/*',
                1 => 'video/*',
                2 => 'application/pdf',
            ),
            'sulu_media.format_cache.path' => ($this->targetDirs[3].'/../web/uploads/media'),
            'sulu_media.format_cache.save_image' => true,
            'sulu_media.format_cache.segments' => 10,
            'sulu_media.ghost_script.path' => 'gs',
            'sulu_media.media.max_file_size' => '16MB',
            'sulu_media.media.blocked_file_types' => array(
                0 => 'file/exe',
            ),
            'sulu_media.media.storage.local.path' => ($this->targetDirs[3].'/../uploads/media'),
            'sulu_media.media.storage.local.segments' => 10,
            'sulu_media.collection.type.default' => array(
                'id' => 1,
            ),
            'sulu_media.collection.previews.format' => '50x50',
            'sulu_media.media.types' => array(
                0 => array(
                    'type' => 'document',
                    'mimeTypes' => array(
                        0 => '*',
                    ),
                ),
                1 => array(
                    'type' => 'image',
                    'mimeTypes' => array(
                        0 => 'image/*',
                    ),
                ),
                2 => array(
                    'type' => 'video',
                    'mimeTypes' => array(
                        0 => 'video/*',
                    ),
                ),
                3 => array(
                    'type' => 'audio',
                    'mimeTypes' => array(
                        0 => 'audio/*',
                    ),
                ),
            ),
            'sulu_media.search.default_image_format' => '170x170',
            'sulu_media.disposition_type.default' => 'attachment',
            'sulu_media.disposition_type.mime_types_inline' => array(

            ),
            'sulu_media.disposition_type.mime_types_attachment' => array(

            ),
            'sulu_media.upload.max_filesize' => 256,
            'sulu_media.admin.class' => 'Sulu\\Bundle\\MediaBundle\\Admin\\MediaAdmin',
            'sulu_media.media_manager.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\Manager\\MediaManager',
            'sulu_media.admin.content_navigation_provider.class' => 'Sulu\\Bundle\\MediaBundle\\Admin\\MediaContentNavigationProvider',
            'sulu_media.media_repository.class' => 'Sulu\\Bundle\\MediaBundle\\Entity\\MediaRepository',
            'sulu_media.collection_repository.class' => 'Sulu\\Bundle\\MediaBundle\\Entity\\CollectionRepository',
            'sulu_media.storage.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\Storage\\LocalStorage',
            'sulu_media.file_validator.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\FileValidator\\FileValidator',
            'sulu_media.format_manager.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\FormatManager\\FormatManager',
            'sulu_media.format_cache_clearer.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\FormatCache\\FormatCacheClearer',
            'sulu_media.format_cache.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\FormatCache\\LocalFormatCache',
            'sulu_media.image.converter.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\ImageConverter\\ImagineImageConverter',
            'sulu_media.image.command_manager.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\ImageConverter\\Command\\Manager\\CommandManager',
            'sulu_media.image.command.resize.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\ImageConverter\\Command\\ResizeCommand',
            'sulu_media.image.command.scale.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\ImageConverter\\Command\\ScaleCommand',
            'sulu_media.image.command.crop.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\ImageConverter\\Command\\CropCommand',
            'sulu_media.media_selection.class' => 'Sulu\\Bundle\\MediaBundle\\Content\\Types\\MediaSelectionContentType',
            'sulu_media.media_selection.template' => 'SuluMediaBundle:Template:content-types/media-selection.html.twig',
            'sulu_media.collection_manager.class' => 'Sulu\\Bundle\\MediaBundle\\Collection\\Manager\\CollectionManager',
            'sulu_media.type_manager.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\TypeManager\\TypeManager',
            'sulu_media.collection_entity' => 'SuluMediaBundle:Collection',
            'sulu_media.media_entity' => 'SuluMediaBundle:Media',
            'sulu_media.entity.file_version_meta' => 'SuluMediaBundle:FileVersionMeta',
            'sulu_media.twig_extension.disposition_type.class' => 'Sulu\\Bundle\\MediaBundle\\Twig\\DispositionTypeTwigExtension',
            'sulu_media.twig_extension.media.class' => 'Sulu\\Bundle\\MediaBundle\\Twig\\MediaTwigExtension',
            'tmp' => 'Sulu\\Bundle\\MediaBundle\\Twig\\MediaTwigExtension',
            'sulu_media.video_thumbnail_generator.class' => 'Sulu\\Bundle\\MediaBundle\\Media\\Video\\VideoThumbnailService',
            'sulu_media.search.subscriber.structure_media.class' => 'Sulu\\Bundle\\MediaBundle\\Search\\Subscriber\\StructureMediaSearchSubscriber',
            'sulu_media.search.subscriber.media.class' => 'Sulu\\Bundle\\MediaBundle\\Search\\Subscriber\\MediaSearchSubscriber',
            'sulu_security.system' => 'Sulu',
            'sulu_security.security_types.fixture' => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/SecurityBundle/DependencyInjection/../DataFixtures/security-types.xml'),
            'sulu_security.permissions' => array(
                'view' => 64,
                'add' => 32,
                'edit' => 16,
                'delete' => 8,
                'archive' => 4,
                'live' => 2,
                'security' => 1,
            ),
            'permissions' => array(
                'view' => 64,
                'add' => 32,
                'edit' => 16,
                'delete' => 8,
                'archive' => 4,
                'live' => 2,
                'security' => 1,
            ),
            'sulu_security.admin.class' => 'Sulu\\Bundle\\SecurityBundle\\Admin\\SecurityAdmin',
            'sulu_security.authentication_entry_point.class' => 'Sulu\\Bundle\\SecurityBundle\\Security\\AuthenticationEntryPoint',
            'sulu_security.authentication_handler.class' => 'Sulu\\Bundle\\SecurityBundle\\Security\\AuthenticationHandler',
            'sulu_security.mask_converter.class' => 'Sulu\\Component\\Security\\Authorization\\MaskConverter',
            'sulu_security.salt_generator.class' => 'Sulu\\Component\\Security\\Authentication\\SaltGenerator',
            'sulu_security.token_generator.class' => 'Sulu\\Bundle\\SecurityBundle\\Util\\TokenGenerator',
            'sulu_security.contacts_content_navigation_provider.class' => 'Sulu\\Bundle\\SecurityBundle\\Admin\\ContactsContentNavigationProvider',
            'sulu_security.roles_content_navigation_provider.class' => 'Sulu\\Bundle\\SecurityBundle\\Admin\\RolesContentNavigationProvider',
            'sulu_security.permission_map.class' => 'Sulu\\Component\\Security\\Authorization\\AccessControl\\PermissionMap',
            'sulu_security.security_context_voter.class' => 'Sulu\\Component\\Security\\Authorization\\SecurityContextVoter',
            'sulu_security.access_control_manager.class' => 'Sulu\\Component\\Security\\Authorization\\AccessControl\\AccessControlManager',
            'sulu_security.phpcr_access_control_provider.class' => 'Sulu\\Component\\Security\\Authorization\\AccessControl\\PhpcrAccessControlProvider',
            'sulu_security.doctrine_access_control_provider.class' => 'Sulu\\Component\\Security\\Authorization\\AccessControl\\DoctrineAccessControlProvider',
            'sulu_security.permission_controller.class' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\PermissionController',
            'sulu_security.group_repository.class' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\GroupRepository',
            'sulu_security.user_repository.class' => 'Sulu\\Component\\Security\\Authentication\\UserRepository',
            'sulu_security.user_setting_repository.class' => 'Sulu\\Component\\Security\\Authentication\\UserSettingRepository',
            'sulu_security.user_repository_factory.class' => 'Sulu\\Component\\Security\\Authentication\\UserRepositoryFactory',
            'sulu_security.build.user.class' => 'Sulu\\Bundle\\SecurityBundle\\Build\\UserBuilder',
            'sulu_security.entity.role' => 'SuluSecurityBundle:Role',
            'sulu_security.entity.group' => 'SuluSecurityBundle:Group',
            'sulu_security.entity.user_setting' => 'SuluSecurityBundle:UserSetting',
            'sulu_security.profile_controller.class' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\ProfileController',
            'sulu.model.user.class' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\User',
            'sulu.repository.user.class' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\UserRepository',
            'sulu.model.role.class' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\Role',
            'sulu.repository.role.class' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\RoleRepository',
            'sulu.model.access_control.class' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\AccessControl',
            'sulu.repository.access_control.class' => 'Sulu\\Bundle\\SecurityBundle\\Entity\\AccessControlRepository',
            'sulu_category.content.type.category_list.template' => 'SuluCategoryBundle:Template:content-types/category_list.html.twig',
            'sulu_category.admin.class' => 'Sulu\\Bundle\\CategoryBundle\\Admin\\CategoryAdmin',
            'sulu_category.category_manager.class' => 'Sulu\\Bundle\\CategoryBundle\\Category\\CategoryManager',
            'sulu_category.category_repository.class' => 'Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryRepository',
            'sulu_category.content_navigation_provider.class' => 'Sulu\\Bundle\\CategoryBundle\\Admin\\CategoryContentNavigationProvider',
            'sulu_category.content.type.category_list.class' => 'Sulu\\Bundle\\CategoryBundle\\Content\\Types\\CategoryList',
            'sulu_category.category_request_handler.class' => 'Sulu\\Component\\Category\\Request\\CategoryRequestHandler',
            'sulu_category.twig_extension.class' => 'Sulu\\Bundle\\CategoryBundle\\Twig\\CategoryTwigExtension',
            'sulu_category.entity.category' => 'SuluCategoryBundle:Category',
            'sulu_category.entity.keyword' => 'SuluCategoryBundle:Keyword',
            'sulu_snippet.content-type.template' => 'SuluSnippetBundle:Template:content-types/snippet.html.twig',
            'sulu_snippet.content-type.default_enabled' => false,
            'sulu_snippet.twig.snippet.cache_lifetime' => 1,
            'sulu_snippet.repository.class' => 'Sulu\\Bundle\\SnippetBundle\\Snippet\\SnippetRepository',
            'sulu_snippet.controller.snippet.class' => 'Sulu\\Bundle\\SnippetBundle\\Controller\\SnippetController',
            'sulu_snippet.twig.snippet.class' => 'Sulu\\Bundle\\SnippetBundle\\Twig\\SnippetTwigExtension',
            'sulu_snippet.twig.snippet.memoized.class' => 'Sulu\\Bundle\\SnippetBundle\\Twig\\MemoizedSnippetTwigExtension',
            'sulu_snippet.form.snippet.class' => 'Sulu\\Bundle\\SnippetBundle\\Form\\SnippetType',
            'sulu_snippet.document.snippet_initializer.class' => 'Sulu\\Bundle\\SnippetBundle\\Document\\SnippetInitializer',
            'sulu_snippet.admin.class' => 'Sulu\\Bundle\\SnippetBundle\\Admin\\SnippetAdmin',
            'sulu_snippet.content_navigation_provider.class' => 'Sulu\\Bundle\\SnippetBundle\\Admin\\SnippetContentNavigationProvider',
            'sulu_snippet.jsconfig.class' => 'Sulu\\Bundle\\AdminBundle\\Admin\\JsConfig',
            'sulu.content.type.smart_content.template' => 'SuluContentBundle:Template:content-types/smart_content.html.twig',
            'sulu.content.type.internal_links.template' => 'SuluContentBundle:Template:content-types/internal_links.html.twig',
            'sulu.content.type.single_internal_link.template' => 'SuluContentBundle:Template:content-types/single_internal_link.html.twig',
            'sulu.content.type.phone.template' => 'SuluContentBundle:Template:content-types/phone.html.twig',
            'sulu.content.type.password.template' => 'SuluContentBundle:Template:content-types/password.html.twig',
            'sulu.content.type.url.template' => 'SuluContentBundle:Template:content-types/url.html.twig',
            'sulu.content.type.email.template' => 'SuluContentBundle:Template:content-types/email.html.twig',
            'sulu.content.type.date.template' => 'SuluContentBundle:Template:content-types/date.html.twig',
            'sulu.content.type.time.template' => 'SuluContentBundle:Template:content-types/time.html.twig',
            'sulu.content.type.color.template' => 'SuluContentBundle:Template:content-types/color.html.twig',
            'sulu.content.type.checkbox.template' => 'SuluContentBundle:Template:content-types/checkbox.html.twig',
            'sulu.content.type.multiple_select.template' => 'SuluContentBundle:Template:content-types/multiple_select.html.twig',
            'sulu.content.type.single_select.template' => 'SuluContentBundle:Template:content-types/single_select.html.twig',
            'sulu.content.preview.mode' => 'auto',
            'sulu.content.preview.websocket' => false,
            'sulu.content.preview.delay' => 200,
            'sulu.content.preview.error_template' => NULL,
            'sulu_content.search.mapping' => array(
                'Sulu\\Bundle\\ContentBundle\\Document\\PageDocument' => array(
                    'index' => 'page',
                ),
                'Sulu\\Bundle\\SnippetBundle\\Document\\SnippetDocument' => array(
                    'index' => 'snippet',
                ),
            ),
            'sulu_content.search.metadata.provider.structure.class' => 'Sulu\\Bundle\\ContentBundle\\Search\\Metadata\\StructureProvider',
            'sulu_content.search.event_subscriber.blame_timestamp.class' => 'Sulu\\Bundle\\ContentBundle\\Search\\EventSubscriber\\BlameTimestampSubscriber',
            'sulu_content.search.event_subscriber.structure.class' => 'Sulu\\Bundle\\ContentBundle\\Search\\EventSubscriber\\StructureSubscriber',
            'sulu_search.event_listener.hit.class' => 'Sulu\\Bundle\\ContentBundle\\Search\\EventListener\\HitListener',
            'sulu_content.admin.class' => 'Sulu\\Bundle\\ContentBundle\\Admin\\ContentAdmin',
            'sulu_content.twig_extension.class' => 'Sulu\\Bundle\\ContentBundle\\Twig\\ContentTwigExtension',
            'sulu_content.content_navigation_provider.class' => 'Sulu\\Bundle\\ContentBundle\\Admin\\ContentContentNavigationProvider',
            'sulu_content.node_repository.class' => 'Sulu\\Bundle\\ContentBundle\\Repository\\NodeRepository',
            'sulu_content.rl_repository.class' => 'Sulu\\Bundle\\ContentBundle\\Repository\\ResourceLocatorRepository',
            'sulu_content.extension.seo.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Structure\\SeoStructureExtension',
            'sulu_content.extension.excerpt.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Structure\\ExcerptStructureExtension',
            'sulu_content.jsconfig.class' => 'Sulu\\Bundle\\AdminBundle\\Admin\\JsConfig',
            'sulu_content.smart_content.data_provider_pool.class' => 'Sulu\\Component\\SmartContent\\DataProviderPool',
            'sulu_content.smart_content.data_provider.content.query_builder.class' => 'Sulu\\Component\\Content\\SmartContent\\QueryBuilder',
            'sulu_content.smart_content.data_provider.content.class' => 'Sulu\\Component\\Content\\SmartContent\\ContentDataProvider',
            'sulu_content.smart_content.data_provider.content.proxy_factory.class' => 'ProxyManager\\Factory\\LazyLoadingValueHolderFactory',
            'sulu_content.smart_content.content_type.class' => 'Sulu\\Component\\SmartContent\\ContentType',
            'sulu.content.type.internal_links.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Types\\InternalLinks',
            'sulu.content.type.single_internal_link.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Types\\SingleInternalLink',
            'sulu.content.type.phone.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Types\\Phone',
            'sulu.content.type.password.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Types\\Password',
            'sulu.content.type.url.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Types\\Url',
            'sulu.content.type.email.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Types\\Email',
            'sulu.content.type.date.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Types\\Date',
            'sulu.content.type.time.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Types\\Time',
            'sulu.content.type.color.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Types\\Color',
            'sulu.content.type.checkbox.class' => 'Sulu\\Bundle\\ContentBundle\\Content\\Types\\Checkbox',
            'sulu_content.preview.exception_listener.class' => 'Sulu\\Bundle\\ContentBundle\\EventListener\\PreviewExceptionListener',
            'sulu_content.preview.message_component.class' => 'Sulu\\Bundle\\ContentBundle\\Preview\\PreviewMessageHandler',
            'sulu_content.preview.class' => 'Sulu\\Bundle\\ContentBundle\\Preview\\Preview',
            'sulu_content.preview.lifetime' => 3600,
            'sulu_content.preview.template-namespace' => 'ClientWebsiteBundle:Website:',
            'sulu_content.preview.cache_provider.class' => 'Sulu\\Bundle\\ContentBundle\\Preview\\DoctrineCacheProvider',
            'sulu_content.preview.cache_provider.doctrine_cache.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'sulu_content.preview.crawler.class' => 'Sulu\\Bundle\\ContentBundle\\Preview\\RdfaCrawler',
            'sulu_content.preview.renderer.class' => 'Sulu\\Bundle\\ContentBundle\\Preview\\PreviewRenderer',
            'sulu_content.jsconfig.preview.class' => 'Sulu\\Bundle\\AdminBundle\\Admin\\JsConfig',
            'sulu_content.structure.factory.class' => 'Sulu\\Component\\Content\\Metadata\\Factory\\StructureMetadataFactory',
            'sulu_content.structure.loader.xml.class' => 'Sulu\\Component\\Content\\Metadata\\Loader\\XmlLoader',
            'sulu_content.extension.manager.class' => 'Sulu\\Component\\Content\\Extension\\ExtensionManager',
            'sulu_tag.content.type.tag_list.template' => 'SuluTagBundle:Template:content-types/tag_list.html.twig',
            'sulu_tag.admin.class' => 'Sulu\\Bundle\\TagBundle\\Admin\\TagAdmin',
            'sulu_tag.tag_manager.class' => 'Sulu\\Bundle\\TagBundle\\Tag\\TagManager',
            'sulu_tag.tag_repository.class' => 'Sulu\\Bundle\\TagBundle\\Entity\\TagRepository',
            'sulu_tag.content.type.tag_list.class' => 'Sulu\\Bundle\\TagBundle\\Content\\Types\\TagList',
            'sulu_tag.tag_request_handler.class' => 'Sulu\\Component\\Tag\\Request\\TagRequestHandler',
            'sulu_tag.twig_extension.class' => 'Sulu\\Bundle\\TagBundle\\Twig\\TagTwigExtension',
            'sulu_tag.entity.tag' => 'SuluTagBundle:Tag',
            'sulu_website.preview_defaults.analytics_key' => 'UA-SULU-PREVIEW-KEY',
            'sulu_website.navigation.cache.lifetime' => 1,
            'sulu_website.content.cache.lifetime' => 1,
            'sulu_website.sitemap.cache.lifetime' => 1,
            'sulu_website.admin.class' => 'Sulu\\Bundle\\WebsiteBundle\\Admin\\WebsiteAdmin',
            'sulu_website.navigation_mapper.class' => 'Sulu\\Bundle\\WebsiteBundle\\Navigation\\NavigationMapper',
            'sulu_website.sitemap.class' => 'Sulu\\Bundle\\WebsiteBundle\\Sitemap\\SitemapGenerator',
            'sulu_website.sitemap_xml_generator.class' => 'Sulu\\Bundle\\WebsiteBundle\\Sitemap\\SitemapXMLGenerator',
            'sulu_website.twig.content_path.class' => 'Sulu\\Bundle\\WebsiteBundle\\Twig\\Content\\ContentPathTwigExtension',
            'sulu_website.twig.navigation.class' => 'Sulu\\Bundle\\WebsiteBundle\\Twig\\Navigation\\NavigationTwigExtension',
            'sulu_website.twig.navigation.memoized.class' => 'Sulu\\Bundle\\WebsiteBundle\\Twig\\Navigation\\MemoizedNavigationTwigExtension',
            'sulu_website.twig.sitemap.class' => 'Sulu\\Bundle\\WebsiteBundle\\Twig\\Sitemap\\SitemapTwigExtension',
            'sulu_website.twig.sitemap.memoized.class' => 'Sulu\\Bundle\\WebsiteBundle\\Twig\\Sitemap\\MemoizedSitemapTwigExtension',
            'sulu_website.twig.content.class' => 'Sulu\\Bundle\\WebsiteBundle\\Twig\\Content\\ContentTwigExtension',
            'sulu_website.twig.content.memoized.class' => 'Sulu\\Bundle\\WebsiteBundle\\Twig\\Content\\MemoizedContentTwigExtension',
            'sulu_website.twig.meta.class' => 'Sulu\\Bundle\\WebsiteBundle\\Twig\\Meta\\MetaTwigExtension',
            'sulu_website.twig.seo.class' => 'Sulu\\Bundle\\WebsiteBundle\\Twig\\Seo\\SeoTwigExtension',
            'sulu_website.twig.util.class' => 'Sulu\\Bundle\\WebsiteBundle\\Twig\\Core\\UtilTwigExtension',
            'sulu_website.routing.portal_loader.class' => 'Sulu\\Bundle\\WebsiteBundle\\Routing\\PortalLoader',
            'sulu_website.exception.controller.class' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\ExceptionController',
            'sulu_website.resolver.request_analyzer.class' => 'Sulu\\Bundle\\WebsiteBundle\\Resolver\\RequestAnalyzerResolver',
            'sulu_website.resolver.structure.class' => 'Sulu\\Bundle\\WebsiteBundle\\Resolver\\StructureResolver',
            'sulu_website.resolver.parameter.class' => 'Sulu\\Bundle\\WebsiteBundle\\Resolver\\ParameterResolver',
            'sulu_website.navigation_mapper.query_builder.class' => 'Sulu\\Bundle\\WebsiteBundle\\Navigation\\NavigationQueryBuilder',
            'sulu_website.sitemap.query_builder.class' => 'Sulu\\Bundle\\WebsiteBundle\\Sitemap\\SitemapContentQueryBuilder',
            'sulu_website.data_collector.sulu_collector.class' => 'Sulu\\Bundle\\WebsiteBundle\\DataCollector\\SuluCollector',
            'sulu_website.engine.initialize' => 'engine.initialize',
            'sulu_location.content.type.location.class' => 'Sulu\\Bundle\\LocationBundle\\Content\\Types\\LocationContentType',
            'sulu_location.admin.class' => 'Sulu\\Bundle\\LocationBundle\\Admin\\LocationAdmin',
            'sulu_location.map_manager.class' => 'Sulu\\Bundle\\LocationBundle\\Map\\MapManager',
            'sulu_location.guzzle.client.class' => 'Guzzle\\Http\\Client',
            'sulu_location.guzzle.log_subscriber.class' => 'Guzzle\\Plugin\\Log\\LogPlugin',
            'sulu_location.guzzle.psr_log_adapter.class' => 'Guzzle\\Log\\PsrLogAdapter',
            'sulu_location.geolocator.manager.class' => 'Sulu\\Bundle\\LocationBundle\\Geolocator\\GeolocatorManager',
            'sulu_location.geolocator.nominatim.class' => 'Sulu\\Bundle\\LocationBundle\\Geolocator\\Service\\NominatimGeolocator',
            'sulu_location.geolocator.google.class' => 'Sulu\\Bundle\\LocationBundle\\Geolocator\\Service\\GoogleGeolocator',
            'sulu.content.type.location.template' => 'SuluLocationBundle:Template:content-types/location.html.twig',
            'sulu_location.geolocator.name' => 'nominatim',
            'sulu_location.geolocator.service.nominatim.endpoint' => 'http://open.mapquestapi.com/nominatim/v1/search.php',
            'sulu_location.geolocator.service.google.api_key' => '',
            'sulu_http_cache.event_subscriber.content_mapper.class' => 'Sulu\\Component\\HttpCache\\EventSubscriber\\ContentMapperSubscriber',
            'sulu_http_cache.event_subscriber.flush_subscriber.class' => 'Sulu\\Component\\HttpCache\\EventSubscriber\\FlushSubscriber',
            'sulu_http_cache.event_subscriber.update_response_subscriber.class' => 'Sulu\\Component\\HttpCache\\EventSubscriber\\UpdateResponseSubscriber',
            'sulu_http_cache.proxy_client.varnish.class' => 'FOS\\HttpCache\\ProxyClient\\Varnish',
            'sulu_http_cache.proxy_client.symfony.class' => 'Sulu\\Component\\HttpCache\\ProxyClient\\Symfony',
            'sulu_http_cache.handler.aggregate.class' => 'Sulu\\Component\\HttpCache\\Handler\\AggregateHandler',
            'sulu_http_cache.handler.tags.class' => 'Sulu\\Component\\HttpCache\\Handler\\TagsHandler',
            'sulu_http_cache.handler.paths.class' => 'Sulu\\Component\\HttpCache\\Handler\\PathsHandler',
            'sulu_http_cache.handler.public.class' => 'Sulu\\Component\\HttpCache\\Handler\\PublicHandler',
            'sulu_http_cache.handler.debug.class' => 'Sulu\\Component\\HttpCache\\Handler\\DebugHandler',
            'sulu_http_cache.proxy_client.varnish.enabled' => false,
            'sulu_http_cache.proxy_client.varnish.servers' => array(

            ),
            'sulu_http_cache.proxy_client.varnish.base_url' => NULL,
            'sulu_http_cache.proxy_client.name' => 'symfony',
            'sulu_http_cache.handler.public.max_age' => 240,
            'sulu_http_cache.handler.public.shared_max_age' => 240,
            'sulu_http_cache.handler.public.use_page_ttl' => true,
            'sulu_http_cache.handler.aggregate.handlers' => array(
                0 => 'paths',
                1 => 'public',
                2 => 'debug',
            ),
            'sulu_websocket.server.ip_address' => '0.0.0.0',
            'sulu_websocket.server.port' => 9876,
            'sulu_websocket.server.http_host' => 'sulu.lo',
            'sulu_websocket.manager.class' => 'Sulu\\Component\\Websocket\\RatchetAppManager',
            'sulu_websocket.admin.class' => 'Sulu\\Bundle\\WebsocketBundle\\Admin\\WebsocketAdmin',
            'sulu_websocket.jsconfig.class' => 'Sulu\\Bundle\\WebsocketBundle\\Admin\\AppJsConfig',
            'sulu_websocket.admin.message_dispatcher.app.class' => 'Sulu\\Component\\Websocket\\MessageDispatcher\\MessageDispatcherApp',
            'sulu_websocket.admin.message_dispatcher.app.cache.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'sulu_websocket.admin.message_dispatcher.class' => 'Sulu\\Component\\Websocket\\MessageDispatcher\\MessageDispatcher',
            'sulu_websocket.fallback_controller.class' => 'Sulu\\Bundle\\WebsocketBundle\\Controller\\FallbackController',
            'sulu_translate.admin.class' => 'Sulu\\Bundle\\TranslateBundle\\Admin\\TranslateAdmin',
            'sulu_translate.import.class' => 'Sulu\\Bundle\\TranslateBundle\\Translate\\Import',
            'sulu_translate.export.class' => 'Sulu\\Bundle\\TranslateBundle\\Translate\\Export',
            'sulu_translate.content_navigation_provider.class' => 'Sulu\\Bundle\\TranslateBundle\\Admin\\TranslateContentNavigationProvider',
            'sulu.translate.build.builder.translation.class' => 'Sulu\\Bundle\\TranslateBundle\\Build\\TranslationBuilder',
            'sulu_document_manager.mapping' => array(
                0 => array(
                    'alias' => 'custom_url',
                    'class' => 'Sulu\\Component\\CustomUrl\\Document\\CustomUrlDocument',
                    'phpcr_type' => 'sulu:custom_url',
                    'mapping' => array(
                        'title' => array(
                            'property' => 'title',
                            'encoding' => 'content',
                            'mapped' => true,
                            'multiple' => false,
                            'default' => NULL,
                        ),
                        'published' => array(
                            'property' => 'published',
                            'encoding' => 'content',
                            'mapped' => true,
                            'multiple' => false,
                            'default' => NULL,
                        ),
                        'baseDomain' => array(
                            'property' => 'baseDomain',
                            'encoding' => 'content',
                            'mapped' => true,
                            'multiple' => false,
                            'default' => NULL,
                        ),
                        'domainParts' => array(
                            'property' => 'domainParts',
                            'type' => 'json_array',
                            'encoding' => 'content',
                            'mapped' => true,
                            'multiple' => false,
                            'default' => NULL,
                        ),
                        'canonical' => array(
                            'property' => 'canonical',
                            'encoding' => 'content',
                            'mapped' => true,
                            'multiple' => false,
                            'default' => NULL,
                        ),
                        'redirect' => array(
                            'property' => 'redirect',
                            'encoding' => 'content',
                            'mapped' => true,
                            'multiple' => false,
                            'default' => NULL,
                        ),
                        'targetLocale' => array(
                            'property' => 'targetLocale',
                            'encoding' => 'content',
                            'mapped' => true,
                            'multiple' => false,
                            'default' => NULL,
                        ),
                    ),
                ),
                1 => array(
                    'alias' => 'custom_url_route',
                    'class' => 'Sulu\\Component\\CustomUrl\\Document\\RouteDocument',
                    'phpcr_type' => 'sulu:custom_url_route',
                    'mapping' => array(
                        'locale' => array(
                            'property' => 'locale',
                            'encoding' => 'content',
                            'mapped' => true,
                            'multiple' => false,
                            'default' => NULL,
                        ),
                    ),
                ),
                2 => array(
                    'alias' => 'page',
                    'class' => 'Sulu\\Bundle\\ContentBundle\\Document\\PageDocument',
                    'phpcr_type' => 'sulu:page',
                    'mapping' => array(

                    ),
                ),
                3 => array(
                    'alias' => 'home',
                    'class' => 'Sulu\\Bundle\\ContentBundle\\Document\\HomeDocument',
                    'phpcr_type' => 'sulu:home',
                    'mapping' => array(

                    ),
                ),
                4 => array(
                    'alias' => 'route',
                    'class' => 'Sulu\\Bundle\\ContentBundle\\Document\\RouteDocument',
                    'phpcr_type' => 'sulu:path',
                    'mapping' => array(

                    ),
                ),
                5 => array(
                    'alias' => 'snippet',
                    'class' => 'Sulu\\Bundle\\SnippetBundle\\Document\\SnippetDocument',
                    'phpcr_type' => 'sulu:snippet',
                    'mapping' => array(

                    ),
                ),
            ),
            'sulu_document_manager.namespace_mapping' => array(
                'extension_localized' => 'i18n',
                'system' => 'sulu',
                'system_localized' => 'i18n',
                'content' => NULL,
                'content_localized' => 'i18n',
            ),
            'sulu_document_manager.segments' => array(
                'custom_urls' => 'custom-urls',
                'custom_urls_items' => 'items',
                'custom_urls_routes' => 'routes',
                'base' => 'cmf',
                'content' => 'contents',
                'route' => 'routes',
                'snippet' => 'snippets',
            ),
            'sulu_custom_urls.uri_filter_regexp' => NULL,
            'phpcr_migrations.version_node_name' => 'jcr:versions',
            'phpcr_migrations.paths' => array(
                0 => ($this->targetDirs[4].'/vendor/sulu/sulu/src/Sulu/Bundle/ContentBundle/Resources/phpcr-migrations'),
            ),
            'dubture_ffmpeg.binary' => '/usr/local/bin/ffmpeg',
            'dubture_ffprobe.binary' => '/usr/local/bin/ffprobe',
            'dubture_ffmpeg.binary_timeout' => 300,
            'dubture_ffmpeg.threads_count' => 4,
            'liip_theme.themes' => array(
                0 => 'default',
            ),
            'liip_theme.active_theme' => 'default',
            'liip_theme.path_patterns' => array(
                'app_resource' => array(

                ),
                'bundle_resource' => array(

                ),
                'bundle_resource_dir' => array(

                ),
            ),
            'liip_theme.cache_warming' => true,
            'liip_theme.cookie' => NULL,
            'liip_theme.assetic_integration' => true,
            'liip_theme.templating_locator.class' => 'Liip\\ThemeBundle\\Locator\\TemplateLocator',
            'liip_theme.file_locator.class' => 'Liip\\ThemeBundle\\Locator\\FileLocator',
            'liip_theme.filesystem_loader.class' => 'Liip\\ThemeBundle\\Twig\\Loader\\FilesystemLoader',
            'liip_theme.active_theme.class' => 'Liip\\ThemeBundle\\ActiveTheme',
            'liip_theme.cache_warmer.class' => 'Liip\\ThemeBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'liip_theme.theme_auto_detect.class' => 'Liip\\ThemeBundle\\Helper\\DeviceDetection',
            'massive_build.command.build.class' => 'Sulu\\Bundle\\CoreBundle\\CommandOptional\\SuluBuildCommand',
            'massive_build.build.registry.class' => 'Massive\\Bundle\\BuildBundle\\Build\\BuildRegistry',
            'web_profiler.controller.profiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController',
            'web_profiler.controller.router.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\RouterController',
            'web_profiler.controller.exception.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController',
            'twig.extension.webprofiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension',
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.class' => 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'cmf_routing.default_controller' => NULL,
            'cmf_routing.generic_controller' => NULL,
            'cmf_routing.controllers_by_type' => array(

            ),
            'cmf_routing.controllers_by_class' => array(

            ),
            'cmf_routing.templates_by_class' => array(

            ),
            'cmf_routing.uri_filter_regexp' => NULL,
            'cmf_routing.route_collection_limit' => 0,
            'cmf_routing.dynamic.locales' => array(

            ),
            'cmf_routing.dynamic.auto_locale_pattern' => false,
            'cmf_routing.dynamic.limit_candidates' => 20,
            'cmf_routing.dynamic_router.class' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Routing\\DynamicRouter',
            'cmf_routing.route_model.class' => NULL,
            'cmf_routing.nested_matcher.class' => 'Symfony\\Cmf\\Component\\Routing\\NestedMatcher\\NestedMatcher',
            'cmf_routing.final_matcher.class' => 'Symfony\\Cmf\\Component\\Routing\\NestedMatcher\\UrlMatcher',
            'cmf_routing.url_matcher.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'cmf_routing.generator.class' => 'Symfony\\Cmf\\Component\\Routing\\ContentAwareGenerator',
            'cmf_routing.enhancer.route_content.class' => 'Symfony\\Cmf\\Component\\Routing\\Enhancer\\RouteContentEnhancer',
            'cmf_routing.enhancer.default_controller.class' => 'Symfony\\Cmf\\Component\\Routing\\Enhancer\\FieldPresenceEnhancer',
            'cmf_routing.enhancer.explicit_template.class' => 'Symfony\\Cmf\\Component\\Routing\\Enhancer\\FieldPresenceEnhancer',
            'cmf_routing.enhancer.controllers_by_type.class' => 'Symfony\\Cmf\\Component\\Routing\\Enhancer\\FieldMapEnhancer',
            'cmf_routing.enhancer.field_by_class.class' => 'Symfony\\Cmf\\Component\\Routing\\Enhancer\\FieldByClassEnhancer',
            'cmf_routing.redirect_controller.class' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Controller\\RedirectController',
            'cmf_routing.chain_router.class' => 'Symfony\\Cmf\\Component\\Routing\\ChainRouter',
            'cmf_routing.replace_symfony_router' => true,
            'cmf_routing.route_type_type.class' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Form\\Type\\RouteTypeType',
            'data_collector.templates' => array(
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.translation' => array(
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
                'doctrine_phpcr.data_collector' => array(
                    0 => 'phpcr',
                    1 => 'DoctrinePHPCRBundle:Collector:phpcr',
                ),
                'sulu_website.data_collector.sulu_collector' => array(
                    0 => 'sulu',
                    1 => 'SuluWebsiteBundle:Profiler:layout',
                ),
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
            ),
            'console.command.ids' => array(
                0 => 'massive_search.command.init',
                1 => 'massive_search.command.status',
                2 => 'massive_search.command.query',
                3 => 'massive_search.command.reindex',
                4 => 'massive_search.command.index_rebuild_deprecated',
                5 => 'massive_search.command.purge',
                6 => 'sulu_document_manager.command.fixtures_load',
                7 => 'sulu_document_manager.command.initialize',
                8 => 'phpcr_migrations.command.status',
                9 => 'phpcr_migrations.command.migrate',
                10 => 'phpcr_migrations.command.initialize',
                11 => 'massive_build.command.build',
                12 => 'sensio_distribution.security_checker.command',
            ),
            'doctrine_phpcr.migrate.migrators' => array(

            ),
            'sulu_media.image.formats' => array(
                '400x400' => array(
                    'name' => '400x400',
                    'commands' => array(
                        0 => array(
                            'action' => 'scale',
                            'parameters' => array(
                                'x' => '400',
                                'y' => '400',
                            ),
                        ),
                    ),
                    'options' => array(

                    ),
                ),
                '400x400-inset' => array(
                    'name' => '400x400-inset',
                    'commands' => array(
                        0 => array(
                            'action' => 'scale',
                            'parameters' => array(
                                'x' => '400',
                                'y' => '400',
                                'mode' => 'inset',
                            ),
                        ),
                    ),
                    'options' => array(

                    ),
                ),
                '200x200' => array(
                    'name' => '200x200',
                    'commands' => array(
                        0 => array(
                            'action' => 'scale',
                            'parameters' => array(
                                'x' => '200',
                                'y' => '200',
                            ),
                        ),
                    ),
                    'options' => array(

                    ),
                ),
                '190x' => array(
                    'name' => '190x',
                    'commands' => array(
                        0 => array(
                            'action' => 'scale',
                            'parameters' => array(
                                'x' => '190',
                            ),
                        ),
                    ),
                    'options' => array(

                    ),
                ),
                '170x170' => array(
                    'name' => '170x170',
                    'commands' => array(
                        0 => array(
                            'action' => 'scale',
                            'parameters' => array(
                                'x' => '170',
                                'y' => '170',
                            ),
                        ),
                    ),
                    'options' => array(

                    ),
                ),
                '150x100' => array(
                    'name' => '150x100',
                    'commands' => array(
                        0 => array(
                            'action' => 'scale',
                            'parameters' => array(
                                'x' => '150',
                                'y' => '100',
                            ),
                        ),
                    ),
                    'options' => array(

                    ),
                ),
                '100x100' => array(
                    'name' => '100x100',
                    'commands' => array(
                        0 => array(
                            'action' => 'scale',
                            'parameters' => array(
                                'x' => '100',
                                'y' => '100',
                            ),
                        ),
                    ),
                    'options' => array(

                    ),
                ),
                '100x100-inset' => array(
                    'name' => '100x100-inset',
                    'commands' => array(
                        0 => array(
                            'action' => 'scale',
                            'parameters' => array(
                                'x' => '100',
                                'y' => '100',
                                'mode' => 'inset',
                            ),
                        ),
                    ),
                    'options' => array(

                    ),
                ),
                '50x50' => array(
                    'name' => '50x50',
                    'commands' => array(
                        0 => array(
                            'action' => 'scale',
                            'parameters' => array(
                                'x' => '50',
                                'y' => '50',
                            ),
                        ),
                    ),
                    'options' => array(

                    ),
                ),
                '640x480' => array(
                    'name' => '640x480',
                    'commands' => array(
                        0 => array(
                            'action' => 'resize',
                            'parameters' => array(
                                'x' => '640',
                                'y' => '480',
                            ),
                        ),
                    ),
                    'options' => array(

                    ),
                ),
            ),
            'sulu.version' => '1.2.3',
        );
    }
}

class FFMpegFFMpeg_000000006e8cffac00007f895803059dc1096b02324e91ad4722ab34f922d660 extends \FFMpeg\FFMpeg implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder575aa1b410804298383938 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer575aa1b410849883827950 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties575aa1b41076a235196769 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function setFFProbe(\FFMpeg\FFProbe $ffprobe)
    {
        $this->initializer575aa1b410849883827950 && $this->initializer575aa1b410849883827950->__invoke($this->valueHolder575aa1b410804298383938, $this, 'setFFProbe', array('ffprobe' => $ffprobe), $this->initializer575aa1b410849883827950);

        return $this->valueHolder575aa1b410804298383938->setFFProbe($ffprobe);
    }

    /**
     * {@inheritDoc}
     */
    public function getFFProbe()
    {
        $this->initializer575aa1b410849883827950 && $this->initializer575aa1b410849883827950->__invoke($this->valueHolder575aa1b410804298383938, $this, 'getFFProbe', array(), $this->initializer575aa1b410849883827950);

        return $this->valueHolder575aa1b410804298383938->getFFProbe();
    }

    /**
     * {@inheritDoc}
     */
    public function setFFMpegDriver(\FFMpeg\Driver\FFMpegDriver $ffmpeg)
    {
        $this->initializer575aa1b410849883827950 && $this->initializer575aa1b410849883827950->__invoke($this->valueHolder575aa1b410804298383938, $this, 'setFFMpegDriver', array('ffmpeg' => $ffmpeg), $this->initializer575aa1b410849883827950);

        return $this->valueHolder575aa1b410804298383938->setFFMpegDriver($ffmpeg);
    }

    /**
     * {@inheritDoc}
     */
    public function getFFMpegDriver()
    {
        $this->initializer575aa1b410849883827950 && $this->initializer575aa1b410849883827950->__invoke($this->valueHolder575aa1b410804298383938, $this, 'getFFMpegDriver', array(), $this->initializer575aa1b410849883827950);

        return $this->valueHolder575aa1b410804298383938->getFFMpegDriver();
    }

    /**
     * {@inheritDoc}
     */
    public function open($pathfile)
    {
        $this->initializer575aa1b410849883827950 && $this->initializer575aa1b410849883827950->__invoke($this->valueHolder575aa1b410804298383938, $this, 'open', array('pathfile' => $pathfile), $this->initializer575aa1b410849883827950);

        return $this->valueHolder575aa1b410804298383938->open($pathfile);
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer575aa1b410849883827950 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer575aa1b410849883827950 && $this->initializer575aa1b410849883827950->__invoke($this->valueHolder575aa1b410804298383938, $this, '__get', array('name' => $name), $this->initializer575aa1b410849883827950);

        if (isset(self::$publicProperties575aa1b41076a235196769[$name])) {
            return $this->valueHolder575aa1b410804298383938->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder575aa1b410804298383938;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder575aa1b410804298383938;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer575aa1b410849883827950 && $this->initializer575aa1b410849883827950->__invoke($this->valueHolder575aa1b410804298383938, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer575aa1b410849883827950);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder575aa1b410804298383938;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder575aa1b410804298383938;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer575aa1b410849883827950 && $this->initializer575aa1b410849883827950->__invoke($this->valueHolder575aa1b410804298383938, $this, '__isset', array('name' => $name), $this->initializer575aa1b410849883827950);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder575aa1b410804298383938;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder575aa1b410804298383938;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer575aa1b410849883827950 && $this->initializer575aa1b410849883827950->__invoke($this->valueHolder575aa1b410804298383938, $this, '__unset', array('name' => $name), $this->initializer575aa1b410849883827950);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder575aa1b410804298383938;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder575aa1b410804298383938;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer575aa1b410849883827950 && $this->initializer575aa1b410849883827950->__invoke($this->valueHolder575aa1b410804298383938, $this, '__clone', array(), $this->initializer575aa1b410849883827950);

        $this->valueHolder575aa1b410804298383938 = clone $this->valueHolder575aa1b410804298383938;
    }

    public function __sleep()
    {
        $this->initializer575aa1b410849883827950 && $this->initializer575aa1b410849883827950->__invoke($this->valueHolder575aa1b410804298383938, $this, '__sleep', array(), $this->initializer575aa1b410849883827950);

        return array('valueHolder575aa1b410804298383938');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer575aa1b410849883827950 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer575aa1b410849883827950;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer575aa1b410849883827950 && $this->initializer575aa1b410849883827950->__invoke($this->valueHolder575aa1b410804298383938, $this, 'initializeProxy', array(), $this->initializer575aa1b410849883827950);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder575aa1b410804298383938;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder575aa1b410804298383938;
    }


}

class FFMpegFFProbe_000000006e8cffab00007f895803059dc1096b02324e91ad4722ab34f922d660 extends \FFMpeg\FFProbe implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder575aa1b414e36231273776 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer575aa1b414e79393732171 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties575aa1b414db6868176962 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getParser()
    {
        $this->initializer575aa1b414e79393732171 && $this->initializer575aa1b414e79393732171->__invoke($this->valueHolder575aa1b414e36231273776, $this, 'getParser', array(), $this->initializer575aa1b414e79393732171);

        return $this->valueHolder575aa1b414e36231273776->getParser();
    }

    /**
     * {@inheritDoc}
     */
    public function setParser(\FFMpeg\FFProbe\OutputParserInterface $parser)
    {
        $this->initializer575aa1b414e79393732171 && $this->initializer575aa1b414e79393732171->__invoke($this->valueHolder575aa1b414e36231273776, $this, 'setParser', array('parser' => $parser), $this->initializer575aa1b414e79393732171);

        return $this->valueHolder575aa1b414e36231273776->setParser($parser);
    }

    /**
     * {@inheritDoc}
     */
    public function getFFProbeDriver()
    {
        $this->initializer575aa1b414e79393732171 && $this->initializer575aa1b414e79393732171->__invoke($this->valueHolder575aa1b414e36231273776, $this, 'getFFProbeDriver', array(), $this->initializer575aa1b414e79393732171);

        return $this->valueHolder575aa1b414e36231273776->getFFProbeDriver();
    }

    /**
     * {@inheritDoc}
     */
    public function setFFProbeDriver(\FFMpeg\Driver\FFProbeDriver $ffprobe)
    {
        $this->initializer575aa1b414e79393732171 && $this->initializer575aa1b414e79393732171->__invoke($this->valueHolder575aa1b414e36231273776, $this, 'setFFProbeDriver', array('ffprobe' => $ffprobe), $this->initializer575aa1b414e79393732171);

        return $this->valueHolder575aa1b414e36231273776->setFFProbeDriver($ffprobe);
    }

    /**
     * {@inheritDoc}
     */
    public function setOptionsTester(\FFMpeg\FFProbe\OptionsTesterInterface $tester)
    {
        $this->initializer575aa1b414e79393732171 && $this->initializer575aa1b414e79393732171->__invoke($this->valueHolder575aa1b414e36231273776, $this, 'setOptionsTester', array('tester' => $tester), $this->initializer575aa1b414e79393732171);

        return $this->valueHolder575aa1b414e36231273776->setOptionsTester($tester);
    }

    /**
     * {@inheritDoc}
     */
    public function getOptionsTester()
    {
        $this->initializer575aa1b414e79393732171 && $this->initializer575aa1b414e79393732171->__invoke($this->valueHolder575aa1b414e36231273776, $this, 'getOptionsTester', array(), $this->initializer575aa1b414e79393732171);

        return $this->valueHolder575aa1b414e36231273776->getOptionsTester();
    }

    /**
     * {@inheritDoc}
     */
    public function setCache(\Doctrine\Common\Cache\Cache $cache)
    {
        $this->initializer575aa1b414e79393732171 && $this->initializer575aa1b414e79393732171->__invoke($this->valueHolder575aa1b414e36231273776, $this, 'setCache', array('cache' => $cache), $this->initializer575aa1b414e79393732171);

        return $this->valueHolder575aa1b414e36231273776->setCache($cache);
    }

    /**
     * {@inheritDoc}
     */
    public function getCache()
    {
        $this->initializer575aa1b414e79393732171 && $this->initializer575aa1b414e79393732171->__invoke($this->valueHolder575aa1b414e36231273776, $this, 'getCache', array(), $this->initializer575aa1b414e79393732171);

        return $this->valueHolder575aa1b414e36231273776->getCache();
    }

    /**
     * {@inheritDoc}
     */
    public function getMapper()
    {
        $this->initializer575aa1b414e79393732171 && $this->initializer575aa1b414e79393732171->__invoke($this->valueHolder575aa1b414e36231273776, $this, 'getMapper', array(), $this->initializer575aa1b414e79393732171);

        return $this->valueHolder575aa1b414e36231273776->getMapper();
    }

    /**
     * {@inheritDoc}
     */
    public function setMapper(\FFMpeg\FFProbe\MapperInterface $mapper)
    {
        $this->initializer575aa1b414e79393732171 && $this->initializer575aa1b414e79393732171->__invoke($this->valueHolder575aa1b414e36231273776, $this, 'setMapper', array('mapper' => $mapper), $this->initializer575aa1b414e79393732171);

        return $this->valueHolder575aa1b414e36231273776->setMapper($mapper);
    }

    /**
     * {@inheritDoc}
     */
    public function format($pathfile)
    {
        $this->initializer575aa1b414e79393732171 && $this->initializer575aa1b414e79393732171->__invoke($this->valueHolder575aa1b414e36231273776, $this, 'format', array('pathfile' => $pathfile), $this->initializer575aa1b414e79393732171);

        return $this->valueHolder575aa1b414e36231273776->format($pathfile);
    }

    /**
     * {@inheritDoc}
     */
    public function streams($pathfile)
    {
        $this->initializer575aa1b414e79393732171 && $this->initializer575aa1b414e79393732171->__invoke($this->valueHolder575aa1b414e36231273776, $this, 'streams', array('pathfile' => $pathfile), $this->initializer575aa1b414e79393732171);

        return $this->valueHolder575aa1b414e36231273776->streams($pathfile);
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer575aa1b414e79393732171 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer575aa1b414e79393732171 && $this->initializer575aa1b414e79393732171->__invoke($this->valueHolder575aa1b414e36231273776, $this, '__get', array('name' => $name), $this->initializer575aa1b414e79393732171);

        if (isset(self::$publicProperties575aa1b414db6868176962[$name])) {
            return $this->valueHolder575aa1b414e36231273776->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder575aa1b414e36231273776;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder575aa1b414e36231273776;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer575aa1b414e79393732171 && $this->initializer575aa1b414e79393732171->__invoke($this->valueHolder575aa1b414e36231273776, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer575aa1b414e79393732171);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder575aa1b414e36231273776;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder575aa1b414e36231273776;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer575aa1b414e79393732171 && $this->initializer575aa1b414e79393732171->__invoke($this->valueHolder575aa1b414e36231273776, $this, '__isset', array('name' => $name), $this->initializer575aa1b414e79393732171);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder575aa1b414e36231273776;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder575aa1b414e36231273776;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer575aa1b414e79393732171 && $this->initializer575aa1b414e79393732171->__invoke($this->valueHolder575aa1b414e36231273776, $this, '__unset', array('name' => $name), $this->initializer575aa1b414e79393732171);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder575aa1b414e36231273776;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder575aa1b414e36231273776;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer575aa1b414e79393732171 && $this->initializer575aa1b414e79393732171->__invoke($this->valueHolder575aa1b414e36231273776, $this, '__clone', array(), $this->initializer575aa1b414e79393732171);

        $this->valueHolder575aa1b414e36231273776 = clone $this->valueHolder575aa1b414e36231273776;
    }

    public function __sleep()
    {
        $this->initializer575aa1b414e79393732171 && $this->initializer575aa1b414e79393732171->__invoke($this->valueHolder575aa1b414e36231273776, $this, '__sleep', array(), $this->initializer575aa1b414e79393732171);

        return array('valueHolder575aa1b414e36231273776');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer575aa1b414e79393732171 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer575aa1b414e79393732171;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer575aa1b414e79393732171 && $this->initializer575aa1b414e79393732171->__invoke($this->valueHolder575aa1b414e36231273776, $this, 'initializeProxy', array(), $this->initializer575aa1b414e79393732171);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder575aa1b414e36231273776;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder575aa1b414e36231273776;
    }


}
