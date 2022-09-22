<?php

/* email/layoutEmail.email.twig */
class __TwigTemplate_3c1d15663bffd734f74da20d0fde09ebab9948302dc4df2f964dba43852121ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
            'body_html_content' => array($this, 'block_body_html_content'),
            'body_html_footer_action' => array($this, 'block_body_html_footer_action'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd2557fbc14c4cdebf508ea29cf7ad74ecb3d5017da81235edd3060c8e1d1c13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd2557fbc14c4cdebf508ea29cf7ad74ecb3d5017da81235edd3060c8e1d1c13->enter($__internal_fd2557fbc14c4cdebf508ea29cf7ad74ecb3d5017da81235edd3060c8e1d1c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/layoutEmail.email.twig"));

        $__internal_ac717ad81f3498f201db61eb8d8fdaeace3228e4bac63f4981b28646f274e828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac717ad81f3498f201db61eb8d8fdaeace3228e4bac63f4981b28646f274e828->enter($__internal_ac717ad81f3498f201db61eb8d8fdaeace3228e4bac63f4981b28646f274e828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/layoutEmail.email.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body_text', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fd2557fbc14c4cdebf508ea29cf7ad74ecb3d5017da81235edd3060c8e1d1c13->leave($__internal_fd2557fbc14c4cdebf508ea29cf7ad74ecb3d5017da81235edd3060c8e1d1c13_prof);

        
        $__internal_ac717ad81f3498f201db61eb8d8fdaeace3228e4bac63f4981b28646f274e828->leave($__internal_ac717ad81f3498f201db61eb8d8fdaeace3228e4bac63f4981b28646f274e828_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0b7c0db13c7ae6a143bf8c6df95ef185355ec0f9291a392df8c915dad44c031d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7c0db13c7ae6a143bf8c6df95ef185355ec0f9291a392df8c915dad44c031d->enter($__internal_0b7c0db13c7ae6a143bf8c6df95ef185355ec0f9291a392df8c915dad44c031d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_402e495e4ced0ea0f340033f4e7c921824700d573f2e2f515b88b49002de57a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402e495e4ced0ea0f340033f4e7c921824700d573f2e2f515b88b49002de57a0->enter($__internal_402e495e4ced0ea0f340033f4e7c921824700d573f2e2f515b88b49002de57a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        
        $__internal_402e495e4ced0ea0f340033f4e7c921824700d573f2e2f515b88b49002de57a0->leave($__internal_402e495e4ced0ea0f340033f4e7c921824700d573f2e2f515b88b49002de57a0_prof);

        
        $__internal_0b7c0db13c7ae6a143bf8c6df95ef185355ec0f9291a392df8c915dad44c031d->leave($__internal_0b7c0db13c7ae6a143bf8c6df95ef185355ec0f9291a392df8c915dad44c031d_prof);

    }

    // line 3
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_63c6f3749abf5b783b3ea277087644d1ed48462aa31d16bd4ba29a7b682cbd06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c6f3749abf5b783b3ea277087644d1ed48462aa31d16bd4ba29a7b682cbd06->enter($__internal_63c6f3749abf5b783b3ea277087644d1ed48462aa31d16bd4ba29a7b682cbd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d442920627f44baddf44a08069d6e8c07e74d3b3cdd55185094bfb34bbac2a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d442920627f44baddf44a08069d6e8c07e74d3b3cdd55185094bfb34bbac2a2b->enter($__internal_d442920627f44baddf44a08069d6e8c07e74d3b3cdd55185094bfb34bbac2a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        
        $__internal_d442920627f44baddf44a08069d6e8c07e74d3b3cdd55185094bfb34bbac2a2b->leave($__internal_d442920627f44baddf44a08069d6e8c07e74d3b3cdd55185094bfb34bbac2a2b_prof);

        
        $__internal_63c6f3749abf5b783b3ea277087644d1ed48462aa31d16bd4ba29a7b682cbd06->leave($__internal_63c6f3749abf5b783b3ea277087644d1ed48462aa31d16bd4ba29a7b682cbd06_prof);

    }

    // line 5
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2a6a0c9ff3bee53b49f10cf31b3c36140b0320d110fc40c5b184ae46dd586c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6a0c9ff3bee53b49f10cf31b3c36140b0320d110fc40c5b184ae46dd586c0d->enter($__internal_2a6a0c9ff3bee53b49f10cf31b3c36140b0320d110fc40c5b184ae46dd586c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_f1e7aa1decf256659af103b9bca74f58cba562a91d8cfa645a60c421dbf5640a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e7aa1decf256659af103b9bca74f58cba562a91d8cfa645a60c421dbf5640a->enter($__internal_f1e7aa1decf256659af103b9bca74f58cba562a91d8cfa645a60c421dbf5640a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        // line 6
        echo "    <html>
        <head>
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        </head>

        <body style=\"margin:0;\">
            <table width=\"620\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px;\">
                <tbody>
                    <tr>
                        ";
        // line 15
        $this->displayBlock('body_html_content', $context, $blocks);
        // line 16
        echo "                    </tr>
                    <tr>
                        <td colspan=\"2\">
                            ";
        // line 19
        $this->displayBlock('body_html_footer_action', $context, $blocks);
        // line 20
        echo "                        </td>
                    </tr>
                </tbody>
            </table>
        </body>
    </html>
";
        
        $__internal_f1e7aa1decf256659af103b9bca74f58cba562a91d8cfa645a60c421dbf5640a->leave($__internal_f1e7aa1decf256659af103b9bca74f58cba562a91d8cfa645a60c421dbf5640a_prof);

        
        $__internal_2a6a0c9ff3bee53b49f10cf31b3c36140b0320d110fc40c5b184ae46dd586c0d->leave($__internal_2a6a0c9ff3bee53b49f10cf31b3c36140b0320d110fc40c5b184ae46dd586c0d_prof);

    }

    // line 15
    public function block_body_html_content($context, array $blocks = array())
    {
        $__internal_33d773504394d096c78ec7fe27f9980f97d8ac970f01c884d68057ae54343940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d773504394d096c78ec7fe27f9980f97d8ac970f01c884d68057ae54343940->enter($__internal_33d773504394d096c78ec7fe27f9980f97d8ac970f01c884d68057ae54343940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        $__internal_75eaefc143a142784fe871557f6f95f2577defa0db117a7e953948f39c1bccc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75eaefc143a142784fe871557f6f95f2577defa0db117a7e953948f39c1bccc5->enter($__internal_75eaefc143a142784fe871557f6f95f2577defa0db117a7e953948f39c1bccc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        
        $__internal_75eaefc143a142784fe871557f6f95f2577defa0db117a7e953948f39c1bccc5->leave($__internal_75eaefc143a142784fe871557f6f95f2577defa0db117a7e953948f39c1bccc5_prof);

        
        $__internal_33d773504394d096c78ec7fe27f9980f97d8ac970f01c884d68057ae54343940->leave($__internal_33d773504394d096c78ec7fe27f9980f97d8ac970f01c884d68057ae54343940_prof);

    }

    // line 19
    public function block_body_html_footer_action($context, array $blocks = array())
    {
        $__internal_bdf2cafd15f40ceafb1ef44ca62c3c446c1f798548765a3f893de888ac1e9499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdf2cafd15f40ceafb1ef44ca62c3c446c1f798548765a3f893de888ac1e9499->enter($__internal_bdf2cafd15f40ceafb1ef44ca62c3c446c1f798548765a3f893de888ac1e9499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        $__internal_41c8b9713a006b21900160488e04cc93ad9b84027731fcffd1cf35b2eae3caf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c8b9713a006b21900160488e04cc93ad9b84027731fcffd1cf35b2eae3caf2->enter($__internal_41c8b9713a006b21900160488e04cc93ad9b84027731fcffd1cf35b2eae3caf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        
        $__internal_41c8b9713a006b21900160488e04cc93ad9b84027731fcffd1cf35b2eae3caf2->leave($__internal_41c8b9713a006b21900160488e04cc93ad9b84027731fcffd1cf35b2eae3caf2_prof);

        
        $__internal_bdf2cafd15f40ceafb1ef44ca62c3c446c1f798548765a3f893de888ac1e9499->leave($__internal_bdf2cafd15f40ceafb1ef44ca62c3c446c1f798548765a3f893de888ac1e9499_prof);

    }

    public function getTemplateName()
    {
        return "email/layoutEmail.email.twig";
    }

    public function getDebugInfo()
    {
        return array (  146 => 19,  129 => 15,  113 => 20,  111 => 19,  106 => 16,  104 => 15,  93 => 6,  84 => 5,  67 => 3,  50 => 1,  40 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}{% endblock %}

{% block body_text %}{% endblock %}

{% block body_html %}
    <html>
        <head>
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        </head>

        <body style=\"margin:0;\">
            <table width=\"620\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px;\">
                <tbody>
                    <tr>
                        {% block body_html_content %}{% endblock %}
                    </tr>
                    <tr>
                        <td colspan=\"2\">
                            {% block body_html_footer_action %}{% endblock %}
                        </td>
                    </tr>
                </tbody>
            </table>
        </body>
    </html>
{% endblock %}", "email/layoutEmail.email.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app\\Resources\\views\\email\\layoutEmail.email.twig");
    }
}
