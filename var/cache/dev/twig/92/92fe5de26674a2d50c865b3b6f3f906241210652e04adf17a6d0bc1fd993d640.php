<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b057e14f79b7ccb386a5be65c0f455d5803489f526c59a6b789c12950fbbfd69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d093ae4311fec2dc0934d95d7f6adde2f73cf38336d832d45d6895daa1c5afe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d093ae4311fec2dc0934d95d7f6adde2f73cf38336d832d45d6895daa1c5afe5->enter($__internal_d093ae4311fec2dc0934d95d7f6adde2f73cf38336d832d45d6895daa1c5afe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_116d801fb4c3f52ac4b54c7f1428b10cc18a10d1c48e3b2c3dce15549086ae07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116d801fb4c3f52ac4b54c7f1428b10cc18a10d1c48e3b2c3dce15549086ae07->enter($__internal_116d801fb4c3f52ac4b54c7f1428b10cc18a10d1c48e3b2c3dce15549086ae07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d093ae4311fec2dc0934d95d7f6adde2f73cf38336d832d45d6895daa1c5afe5->leave($__internal_d093ae4311fec2dc0934d95d7f6adde2f73cf38336d832d45d6895daa1c5afe5_prof);

        
        $__internal_116d801fb4c3f52ac4b54c7f1428b10cc18a10d1c48e3b2c3dce15549086ae07->leave($__internal_116d801fb4c3f52ac4b54c7f1428b10cc18a10d1c48e3b2c3dce15549086ae07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
