<?php

/* AdminBundle:CtAnomalie:edit.html.twig */
class __TwigTemplate_d429161cd2ddc8aae9e4edf6226bbbc503fabb94cce29bdfe3beef7503ac1199 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtAnomalie:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a4932d67a20e0ddffb66c7e0cddf081330826fc46b1522636cdeaa1c537c391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a4932d67a20e0ddffb66c7e0cddf081330826fc46b1522636cdeaa1c537c391->enter($__internal_5a4932d67a20e0ddffb66c7e0cddf081330826fc46b1522636cdeaa1c537c391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtAnomalie:edit.html.twig"));

        $__internal_62c92002598ea76b2c35fbb5940321f338d4d9077e8a56f3030e0ee6f1318c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c92002598ea76b2c35fbb5940321f338d4d9077e8a56f3030e0ee6f1318c16->enter($__internal_62c92002598ea76b2c35fbb5940321f338d4d9077e8a56f3030e0ee6f1318c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtAnomalie:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_anomalie"] = true;
        // line 8
        $context["menu_anomalie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a4932d67a20e0ddffb66c7e0cddf081330826fc46b1522636cdeaa1c537c391->leave($__internal_5a4932d67a20e0ddffb66c7e0cddf081330826fc46b1522636cdeaa1c537c391_prof);

        
        $__internal_62c92002598ea76b2c35fbb5940321f338d4d9077e8a56f3030e0ee6f1318c16->leave($__internal_62c92002598ea76b2c35fbb5940321f338d4d9077e8a56f3030e0ee6f1318c16_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef6e850350bfa95cebaccfb200a696d9c5c7f11ee5e21a856f21b94298333de9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef6e850350bfa95cebaccfb200a696d9c5c7f11ee5e21a856f21b94298333de9->enter($__internal_ef6e850350bfa95cebaccfb200a696d9c5c7f11ee5e21a856f21b94298333de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_02f794d9c317740247ce7064b7a5dd9c55134ba53c8ea1208c4f8db88c660d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f794d9c317740247ce7064b7a5dd9c55134ba53c8ea1208c4f8db88c660d0b->enter($__internal_02f794d9c317740247ce7064b7a5dd9c55134ba53c8ea1208c4f8db88c660d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Anomalie ";
        
        $__internal_02f794d9c317740247ce7064b7a5dd9c55134ba53c8ea1208c4f8db88c660d0b->leave($__internal_02f794d9c317740247ce7064b7a5dd9c55134ba53c8ea1208c4f8db88c660d0b_prof);

        
        $__internal_ef6e850350bfa95cebaccfb200a696d9c5c7f11ee5e21a856f21b94298333de9->leave($__internal_ef6e850350bfa95cebaccfb200a696d9c5c7f11ee5e21a856f21b94298333de9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2b11ad9b2c88b716984ea742ae7913ba2bce7041524c446df505d82e941e79b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b11ad9b2c88b716984ea742ae7913ba2bce7041524c446df505d82e941e79b->enter($__internal_d2b11ad9b2c88b716984ea742ae7913ba2bce7041524c446df505d82e941e79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd3630743a06691ddaf80e53619ea31b62f54f192e8f0b2bc5f42aa7561b71ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3630743a06691ddaf80e53619ea31b62f54f192e8f0b2bc5f42aa7561b71ee->enter($__internal_cd3630743a06691ddaf80e53619ea31b62f54f192e8f0b2bc5f42aa7561b71ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctAnomalieType", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "anmlLibelle", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "anmlCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_anomalie\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anomalie_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_cd3630743a06691ddaf80e53619ea31b62f54f192e8f0b2bc5f42aa7561b71ee->leave($__internal_cd3630743a06691ddaf80e53619ea31b62f54f192e8f0b2bc5f42aa7561b71ee_prof);

        
        $__internal_d2b11ad9b2c88b716984ea742ae7913ba2bce7041524c446df505d82e941e79b->leave($__internal_d2b11ad9b2c88b716984ea742ae7913ba2bce7041524c446df505d82e941e79b_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtAnomalie:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  141 => 38,  133 => 33,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Anomalie {% endblock %}

{% set menu_anomalie        = true %}
{% set menu_anomalie_create = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctAnomalieType) }}
                        {{ form_row(edit_form.anmlLibelle) }}
                        {{ form_row(edit_form.anmlCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_anomalie\"/>
                        <a href=\"{{ path('anomalie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtAnomalie:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtAnomalie/edit.html.twig");
    }
}
