<?php

namespace ContainerYM1eM17;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationDebugService extends App_KernelProdContainer
{
    /*
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($container->services['translator'] ?? $container->load('getTranslatorService')), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), 'D:\\agence-immo/translations', 'D:\\agence-immo/templates', [0 => 'D:\\agence-immo\\vendor\\symfony\\validator/Resources/translations', 1 => 'D:\\agence-immo\\vendor\\symfony\\form/Resources/translations', 2 => 'D:\\agence-immo\\vendor\\symfony\\security-core/Resources/translations'], [0 => 'D:\\agence-immo\\vendor\\symfony\\twig-bridge/Resources/views/Email', 1 => 'D:\\agence-immo\\vendor\\symfony\\twig-bridge/Resources/views/Form', 2 => 'D:\\agence-immo\\vendor\\symfony\\http-kernel\\EventListener\\LocaleAwareListener.php', 3 => 'D:\\agence-immo\\vendor\\symfony\\framework-bundle\\Command\\TranslationDebugCommand.php', 4 => 'D:\\agence-immo\\vendor\\symfony\\form\\Extension\\Core\\Type\\FileType.php', 5 => 'D:\\agence-immo\\vendor\\symfony\\form\\Extension\\Core\\Type\\ColorType.php', 6 => 'D:\\agence-immo\\vendor\\symfony\\form\\Extension\\Core\\Type\\TransformationFailureExtension.php', 7 => 'D:\\agence-immo\\vendor\\symfony\\form\\Extension\\Validator\\Type\\UploadValidatorExtension.php', 8 => 'D:\\agence-immo\\vendor\\symfony\\form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension.php', 9 => 'D:\\agence-immo\\vendor\\symfony\\validator\\ValidatorBuilder.php', 10 => 'D:\\agence-immo\\vendor\\symfony\\framework-bundle\\CacheWarmer\\TranslationsCacheWarmer.php', 11 => 'D:\\agence-immo\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php', 12 => 'D:\\agence-immo\\vendor\\knplabs\\knp-paginator-bundle\\src\\Helper\\Processor.php']);

        $instance->setName('debug:translation');

        return $instance;
    }
}
